const my_info_btn = document.getElementById("my_info_btn");
const title = document.getElementById("title");
const gallery_visable = document.getElementById("gallery_visable");
const gallery_revise = document.getElementById("gallery_revise");

title.addEventListener("click", function () {
  location.href = "../main/main.php";
});

gallery_revise.addEventListener("click", function () {
  location.href = "../myInfo/myGalleryRevise.php";
});
