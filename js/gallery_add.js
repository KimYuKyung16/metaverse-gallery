const gallery_add_form = document.getElementById("gallery_add_form")
const gallery_name = document.getElementById("gallery_name")
const save_btn = document.getElementById("save_btn")


save_btn.addEventListener("click", function(){ //메인 타이틀을 눌렀을 때
  if (gallery_name.value != ""){
    gallery_add_form.submit();
  }
  
  // location.href='gallery_add.php'
});