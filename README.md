# Metaverse-Gallery
코로나가 심했을 시기에 문화 생활을 즐기러 다니기 힘들었습니다.
따라서 집에서도 갤러리를 보러다니는 것과 같이 문화 생활을 즐길 수 있도록 만들어보자는 취지에서 해당 웹페이지를 제작했습니다. 최대한 갤러리를 돌아다닌다는 느낌을 낼 수 있게 페이지를 디자인했습니다. :walking:

<br/>

## :information_desk_person: 프로젝트 기능
1. 본인이 직접 갤러리를 생성해서 작품을 등록할 수 있습니다.

2. 보고 싶은 갤러리를 선택해서 볼 수 있습니다.

3. 메타버스의 형태로도 갤러리를 둘러볼 수 있습니다.

4. 관리자가 직접 모든 갤러리를 관리할 수 있습니다. 

## 시작 가이드
### Requirements
- APMSETUP 7 설치 후 Apache2, MySQL5 실행
```bash
$ git clone https://github.com/KimYuKyung16/metaverse-gallery.git
```

<br/>

<div align="center">
  <h4 weight="bold">✨Tech Stack✨</h4>

  <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white"/>
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white"/>
  <img src="https://img.shields.io/badge/Apache-D22128?style=flat&logo=apache&logoColor=white"/>
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white"/>
</div>

<br/>

## :page_with_curl: 화면 구성
<img src="https://github.com/KimYuKyung16/metaverse-gallery/assets/81006438/b65015d3-a8da-47d8-b469-8b416ea060ed"/>

> `메인페이지`: 현재 전시중인 대표 갤러리들을 확인할 수 있습니다.

<img src="https://github.com/KimYuKyung16/metaverse-gallery/assets/81006438/584fb8be-0e8d-4273-8ea8-729d956e5c70"/>

> `갤러리`: 스크롤을 하며 작품을 감상할 수 있습니다. 작품을 클릭해 작품의 설명을 읽어볼 수 있습니다. 또한 갤러리 후기를 확인하고 남길 수 있습니다.

<img src="https://github.com/KimYuKyung16/metaverse-gallery/assets/81006438/92310aa0-9fbc-410d-914e-53639ed646e3"/>

> `갤러리 소개`: 이용 방법에 대해서 설명합니다.

<img src="https://github.com/KimYuKyung16/metaverse-gallery/assets/81006438/98292a5f-7141-4b29-924e-7ae2f825ced0"/>

> `진행중인 전시회`: 다양한 종류의 전시회를 확인할 수 있습니다.

<img src="https://github.com/KimYuKyung16/metaverse-gallery/assets/81006438/82f906c4-65aa-49b4-a7e5-2a22dedc29d9"/>

> `내 정보`: 내 정보에서는 본인이 전시중인 갤러리를 수정할 수 있습니다. 

<img src="https://github.com/KimYuKyung16/metaverse-gallery/assets/81006438/59323850-f950-45a4-b0d3-501e28ca36a8"/>

> `갤러리 수정`: 갤러리의 정보를 수정할 수 있습니다. 갤러리 공개 여부에 따라서 갤러리가 남에게 보이지 않게 할 수 있습니다. 갤러리 메타버스 제작 여부에 체크를 하면 관리자가 이를 확인하고 해당 갤러리의 메타버스를 제작한 후 링크를 남겨줍니다. 마지막으로 갤러리 전시 기간도 설정하여 관리자가 이를 확인하고 해당 전시를 끝낼 수 있습니다. 

<img src="https://github.com/KimYuKyung16/metaverse-gallery/assets/81006438/41584c42-1ac2-4af2-b30d-33ef4c0f1d7d"/>

> `메타버스`: 관리자가 제공한 메타버스 링크를 통해 해당 갤러리의 메타버스로 접속할 수 있습니다.
