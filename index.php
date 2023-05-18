<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zing Mp3</title>
  <link rel="icon" href="./assets/img/icon-home/small-logo.svg" type="image/gif" sizes="16x16" />
  <!-- reset css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
  <!-- css grid để kết hợp chia khung và responsive -->
  <link rel="stylesheet" href="./assets/css/grid.css" />
  <!-- css mấy cái chung ban đầu -->
  <link rel="stylesheet" href="./assets/css/base.css" />
  <!-- css chính -->
  <link rel="stylesheet" href="./assets/css/main.css" />
  <!-- css để responsive trên các thiết bị -->
  <link rel="stylesheet" href="./assets/css/responsive.css" />
  <link rel="stylesheet" href="./assets/css/login.css" />
  <!-- nếu trình duyệt IE < 9 thì comment dưới sẽ thành code chạy dc, code scrip dước có chức năng để chạy dc media-query để responsive trên trình chuyệt thấp IE < 9 -->
  <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.1/respond.js"></script>
    <![endif]-->
  <!-- dùng google font roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <!-- icon fontawesome -->
  <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.3-web/css/all.min.css" />

<body>
  <div class="main" style="
        background-color: #170f24;
      ">
    <div class="grid">
      <!-- BEGIN SIDEBAR -->
      <div class="main-sidebar mobile-hiden">
        <a href="#"></a>
        <div class="sidebar__logo"></div>
        <div class="sidebar__persional">
          <ul class="sidebar__list">
            <!-- sidebar__item--active -->
            <li class="sidebar__item js__sidebar-tabs js__main-color sidebar__item--active">
              <i class="far fa-play-circle"></i>
              Cá Nhân
            </li>
            <li class="sidebar__item js__sidebar-tabs js__main-color">
              <svg style="margin-right: 10px;" width="20" height="20" viewBox="0 0 23 23" fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 12C3.25 7.16751 7.16751 3.25 12 3.25C16.8325 3.25 20.75 7.16751 20.75 12C20.75 16.8325 16.8325 20.75 12 20.75C7.16751 20.75 3.25 16.8325 3.25 12ZM12 1.75C6.33908 1.75 1.75 6.33908 1.75 12C1.75 17.6609 6.33908 22.25 12 22.25C17.6609 22.25 22.25 17.6609 22.25 12C22.25 6.33908 17.6609 1.75 12 1.75ZM9.25 12C9.25 10.4812 10.4812 9.25 12 9.25C13.5188 9.25 14.75 10.4812 14.75 12C14.75 13.5188 13.5188 14.75 12 14.75C10.4812 14.75 9.25 13.5188 9.25 12ZM12 7.75C9.65279 7.75 7.75 9.65279 7.75 12C7.75 14.3472 9.65279 16.25 12 16.25C14.3472 16.25 16.25 14.3472 16.25 12C16.25 9.65279 14.3472 7.75 12 7.75Z" fill-opacity="0.8"></path></svg>
              Khám Phá
            </li>
            <li class="sidebar__item js__sidebar-tabs js__main-color">
              <svg style="margin-right: 10px" width="20" height="20" viewBox="0 0 23 23" fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.76078 11.5281C2.0086 6.08576 6.49865 1.75 12.0018 1.75C14.0559 1.75 15.971 2.35489 17.5759 3.39648C17.9234 3.62198 18.0222 4.08645 17.7967 4.4339C17.5712 4.78136 17.1068 4.88023 16.7593 4.65473C15.3901 3.76614 13.7574 3.25 12.0018 3.25C7.30422 3.25 3.47074 6.95138 3.25923 11.5963C3.24039 12.0101 2.88968 12.3303 2.47589 12.3114C2.06211 12.2926 1.74194 11.9419 1.76078 11.5281ZM21.5275 11.6871C21.9413 11.7057 22.2617 12.0563 22.243 12.4701C21.998 17.9149 17.5067 22.2536 12.0018 22.2536C9.89696 22.2536 7.93821 21.6184 6.30952 20.5292C5.9652 20.299 5.87274 19.8332 6.103 19.4889C6.33327 19.1446 6.79905 19.0521 7.14337 19.2824C8.53298 20.2117 10.203 20.7536 12.0018 20.7536C16.7009 20.7536 20.5354 17.0497 20.7445 12.4026C20.7632 11.9888 21.1137 11.6685 21.5275 11.6871ZM20.7535 8.05986C20.7535 7.40256 20.2207 6.86972 19.5634 6.86972C18.9061 6.86972 18.3732 7.40256 18.3732 8.05986C18.3732 8.71715 18.9061 9.25 19.5634 9.25C20.2207 9.25 20.7535 8.71715 20.7535 8.05986ZM19.5634 5.36972C21.0491 5.36972 22.2535 6.57413 22.2535 8.05986C22.2535 9.54558 21.0491 10.75 19.5634 10.75C19.1208 10.75 18.7031 10.6431 18.3349 10.4537L15.5083 14.5112C15.3814 14.6933 15.1803 14.8099 14.9592 14.8295C14.738 14.8491 14.5196 14.7698 14.3626 14.6128L13.3637 13.6139L12.2257 15.3202C12.0906 15.5227 11.8658 15.6471 11.6225 15.6538C11.3793 15.6605 11.1478 15.5488 11.0018 15.3542L9.05228 12.7558L6.78385 15.0242C6.75187 15.0562 6.71772 15.0847 6.68188 15.1097C6.80299 15.4073 6.86972 15.7328 6.86972 16.074C6.86972 17.4877 5.72363 18.6338 4.30986 18.6338C2.89609 18.6338 1.75 17.4877 1.75 16.074C1.75 14.6602 2.89609 13.5141 4.30986 13.5141C4.83856 13.5141 5.32983 13.6744 5.73772 13.949L8.60299 11.0837C8.75671 10.93 8.96957 10.8506 9.18642 10.8659C9.40327 10.8813 9.60278 10.9901 9.73324 11.164L11.5657 13.6064L12.6234 12.0207C12.748 11.8338 12.9499 11.7126 13.1735 11.6905C13.3971 11.6684 13.6188 11.7477 13.7776 11.9065L14.7897 12.9186L17.2351 9.40829C17.005 9.01185 16.8732 8.55124 16.8732 8.05986C16.8732 6.57413 18.0777 5.36972 19.5634 5.36972ZM4.30986 15.0141C4.8952 15.0141 5.36972 15.4886 5.36972 16.074C5.36972 16.6593 4.8952 17.1338 4.30986 17.1338C3.72452 17.1338 3.25 16.6593 3.25 16.074C3.25 15.4886 3.72452 15.0141 4.30986 15.0141Z" fill="#currentColor" fill-opacity="0.8"></path></svg>
              #zingchart
            </li>
            <li class="sidebar__item js__main-color sidebar__item-radio js__toast">
              <svg style="margin-right: 10px;" width="20" height="20" viewBox="0 0 23 23" fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.8722 2.67978C11.911 3.09217 11.6082 3.45794 11.1958 3.49675C6.88011 3.90291 3.5 7.54519 3.5 11.98C3.5 16.6875 7.30771 20.501 12.0014 20.501C16.6952 20.501 20.5029 16.6875 20.5029 11.98C20.5029 10.3767 20.0618 8.87895 19.2951 7.59953C19.0822 7.24422 19.1976 6.78359 19.5529 6.57068C19.9082 6.35777 20.3688 6.4732 20.5818 6.82851C21.4842 8.33451 22.0029 10.0978 22.0029 11.98C22.0029 17.513 17.5266 22.001 12.0014 22.001C6.4763 22.001 2 17.513 2 11.98C2 6.76649 5.9737 2.48158 11.0553 2.00335C11.4676 1.96454 11.8334 2.26739 11.8722 2.67978ZM11.8656 6.19339C11.9286 6.60278 11.6479 6.98576 11.2385 7.0488C8.85318 7.4161 7.02419 9.48361 7.02419 11.9799C7.02419 13.3678 7.58856 14.622 8.50124 15.527C8.79536 15.8186 8.79736 16.2935 8.50571 16.5876C8.21405 16.8818 7.73918 16.8838 7.44506 16.5921C6.25964 15.4166 5.52419 13.7835 5.52419 11.9799C5.52419 8.73441 7.90208 6.04487 11.0102 5.56627C11.4196 5.50323 11.8026 5.784 11.8656 6.19339ZM16.7493 8.68305C17.1175 8.49328 17.5698 8.63791 17.7595 9.00609C18.2192 9.89782 18.4783 10.9096 18.4783 11.9799C18.4783 15.5622 15.58 18.469 12.0013 18.469C11.5871 18.469 11.2513 18.1333 11.2513 17.719C11.2513 17.3048 11.5871 16.969 12.0013 16.969C14.7485 16.969 16.9783 14.7368 16.9783 11.9799C16.9783 11.1542 16.7788 10.3774 16.4262 9.69332C16.2365 9.32514 16.3811 8.87282 16.7493 8.68305ZM14.3787 2.2439C13.9763 2.14558 13.5704 2.39207 13.4721 2.79444C13.4513 2.87927 13.4459 2.96425 13.4541 3.04647V9.4046C13.0253 9.16142 12.5297 9.02255 12.0013 9.02255C10.3691 9.02255 9.04861 10.3481 9.04861 11.9799C9.04861 13.6117 10.3691 14.9373 12.0013 14.9373C13.6336 14.9373 14.9541 13.6117 14.9541 11.9799C14.9541 11.9479 14.9535 11.916 14.9525 11.8842C14.9536 11.8681 14.9541 11.8519 14.9541 11.8355V3.98669C15.7486 4.28167 16.4875 4.69246 17.1504 5.19895C17.4795 5.45044 17.9502 5.3875 18.2017 5.05837C18.4532 4.72924 18.3902 4.25855 18.0611 4.00706C16.9849 3.18473 15.7363 2.57565 14.3787 2.2439ZM12.0013 10.5225C11.2005 10.5225 10.5486 11.1735 10.5486 11.9799C10.5486 12.7863 11.2005 13.4373 12.0013 13.4373C12.8022 13.4373 13.4541 12.7863 13.4541 11.9799C13.4541 11.1735 12.8022 10.5225 12.0013 10.5225Z" fill-opacity="0.8"></path></svg>
              Radio
              <span>Live</span>
            </li>
            <li class="sidebar__item js__main-color js__toast">
              <i class="far fa-list-alt"></i>
              Theo Dõi
            </li>
          </ul>
        </div>
        <div class="sidebar__line"></div>
        <div class="sidebar__library">
          <div class="sidebar__library-top">
            <ul class="sidebar__library-top-list sidebar__list">
              <!-- sidebar__item--active -->
              <li class="sidebar__item js__main-color js__toast">
                <svg style="margin-right: 10px;" width="20" height="20" viewBox="0 0 23 23" fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M20.25 2C20.25 1.58579 19.9142 1.25 19.5 1.25C19.0858 1.25 18.75 1.58579 18.75 2C18.75 2.95195 18.4626 3.63685 18.0656 4.07478C17.6709 4.51015 17.1258 4.75 16.5 4.75C16.0858 4.75 15.75 5.08579 15.75 5.5C15.75 5.91421 16.0858 6.25 16.5 6.25C17.126 6.25 17.671 6.48996 18.0657 6.9254C18.4628 7.36341 18.75 8.04835 18.75 9C18.75 9.41421 19.0858 9.75 19.5 9.75C19.9142 9.75 20.25 9.41421 20.25 9C20.25 8.04805 20.5374 7.36315 20.9344 6.92522C21.3291 6.48985 21.8742 6.25 22.5 6.25C22.9142 6.25 23.25 5.91421 23.25 5.5C23.25 5.08579 22.9142 4.75 22.5 4.75C21.874 4.75 21.329 4.51004 20.9343 4.0746C20.5372 3.63659 20.25 2.95165 20.25 2ZM19.1769 5.08231C19.2934 4.95373 19.4013 4.81641 19.5 4.6709C19.5987 4.81629 19.7064 4.95351 19.8229 5.082C19.9625 5.23602 20.1129 5.37549 20.2725 5.49999C20.113 5.62441 19.9627 5.76378 19.8231 5.91769C19.7066 6.04627 19.5987 6.18359 19.5 6.3291C19.4013 6.18371 19.2936 6.04649 19.1771 5.918C19.0375 5.76398 18.8871 5.62451 18.7275 5.50001C18.887 5.37559 19.0373 5.23622 19.1769 5.08231ZM13.5095 5.31294C13.5652 5.72339 13.2776 6.10128 12.8672 6.15698L12.3492 6.22728L11.3238 6.36644C10.186 6.55633 9.25 7.65728 9.25 8.74999V18.5C9.25 20.5711 7.57107 22.25 5.5 22.25C3.42893 22.25 1.75 20.5711 1.75 18.5C1.75 16.4289 3.42893 14.75 5.5 14.75C6.3442 14.75 7.12325 15.0289 7.75 15.4997V8.74999C7.75 6.89294 9.25015 5.18376 11.0921 4.88439L11.1116 4.88149L12.1475 4.7409L12.6655 4.67061C13.0759 4.61491 13.4538 4.90249 13.5095 5.31294ZM5.5 16.25C6.74264 16.25 7.75 17.2573 7.75 18.5C7.75 19.7426 6.74264 20.75 5.5 20.75C4.25736 20.75 3.25 19.7426 3.25 18.5C3.25 17.2573 4.25736 16.25 5.5 16.25ZM19.5 11.75C19.9142 11.75 20.25 12.0858 20.25 12.5V17.5C20.25 19.5711 18.5711 21.25 16.5 21.25C14.4289 21.25 12.75 19.5711 12.75 17.5C12.75 15.4289 14.4289 13.75 16.5 13.75C17.3442 13.75 18.1233 14.0289 18.75 14.4997V12.5C18.75 12.0858 19.0858 11.75 19.5 11.75ZM16.5 15.25C17.7426 15.25 18.75 16.2573 18.75 17.5C18.75 18.7426 17.7426 19.75 16.5 19.75C15.2574 19.75 14.25 18.7426 14.25 17.5C14.25 16.2573 15.2574 15.25 16.5 15.25Z" fill-opacity="0.8"></path></svg>
                Nhạc Mới
              </li>
              <li class="sidebar__item js__main-color js__toast">
                <i class="fab fa-buromobelexperte"></i>
                Thể Loại
              </li>
              <li class="sidebar__item js__main-color js__toast">
                <svg style="margin-right: 10px;" width="20" height="20" viewBox="0 0 23 23" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 17L7.01888 19.6187C6.65207 19.8116 6.22335 19.5001 6.29341 19.0916L7.24472 13.5451L3.21491 9.61699C2.91815 9.32773 3.08191 8.82374 3.49202 8.76415L9.06107 7.95491L11.5516 2.90849C11.735 2.53687 12.265 2.53687 12.4484 2.90849L14.9389 7.95491L20.508 8.76415C20.9181 8.82374 21.0818 9.32773 20.7851 9.61699L16.7553 13.5451L17.7066 19.0916C17.7766 19.5001 17.3479 19.8116 16.9811 19.6187L12 17Z" stroke="currentColor" stroke-opacity="0.8" stroke-width="1.5"></path></svg>
                Top 100
              </li>
              <li class="sidebar__item js__main-color js__toast">
                <i class="fas fa-photo-video"></i>
                MV
              </li>
            </ul>
          </div>
          <div class="sidebar__library-center">
            <span class="sidebar__library-center-vip-heading">Nghe nhạc không quảng cáo cùng kho nhạc VIP</span>
            <span class="sidebar__library-center-vip-body js__toast">Nâng cấp VIP</span>
          </div>
          <div class="sidebar__library-bot">
            <div class="sidebar__library-bot-heading js__main-color">
              Thư viện
              <div class="sidebar__library-bot-heading-option">
                <i class="fas fa-pencil-alt"></i>
              </div>
            </div>
            <ul class="sidebar__list">
              <li class="sidebar__library-bot-item sidebar__item js__sub-color js__toast">
                <i class="fas fa-music"></i>
                Bài hát
              </li>
              <li class="sidebar__library-bot-item sidebar__item js__sub-color js__toast">
                <i class="far fa-file-audio"></i>
                Playlist
              </li>
              <li class="sidebar__library-bot-item sidebar__item js__sub-color js__toast">
                <i class="fas fa-clock"></i>
                Gần đây
              </li>
            </ul>
            <div class="sidebar__library-bot-extra sidebar__item js__toast js__sub-color">
              Replay
              <span class="sidebar__library-bot-extra-option">
                <i class="fas fa-ellipsis-h"></i>
              </span>
            </div>
            <div class="sidebar__library-bot-extra sidebar__item js__toast js__sub-color">
              Nhạc xuân
              <span class="sidebar__library-bot-extra-option">
                <i class="fas fa-ellipsis-h"></i>
              </span>
            </div>
            <div class="sidebar__library-bot-extra sidebar__item js__toast js__sub-color">
              Nhạc trung quốc
              <span class="sidebar__library-bot-extra-option">
                <i class="fas fa-ellipsis-h"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="sidebar__add-playlist">
          <i class="fas fa-plus js__main-color"></i>
          <span class="js__main-color">Tạo playlist mới</span>
        </div>
      </div>
    </div>
    <!-- END SIDEBAR -->

    <!-- BEGIN CONTAINER -->
    <div class="main-container">
      <!-- header--active -->
      <div class="header-wrapper">
        <div class="header">
          <div class="header__undo mobile-hiden js__sub-color">
            <i class="fas fa-arrow-left hover js__toast"></i>
            <i class="fas fa-arrow-right hover js__toast header__undo--disble"></i>
          </div>
          <div class="header__width-search js__backgroundColor">
            <i class="fas fa-search header__width-search-icon js__sub-color"></i>
            <!-- header__width-search-input--white -->
            <!-- header__width-search-input--dark -->
            <input name="search" id="search" placeholder="Nhập tên bài hát, nghệ sĩ hoặc MV . . ." type="text" class="header__width-search-input" />
            <!-- header__width-search-sub--white -->
            <!-- header__width-search-sub--green -->
            <!-- header__width-search-sub--gray -->
            <!-- header__width-search-sub--purple -->
            <div class="header__width-search-sub">
              <span class="header__width-search-sub-header js__main-color">Đề xuất cho bạn</span>
              <ul class="header__width-search-sub-list">
                <li class="header__width-search-sub-item">
                  <a href="#" class="header__width-search-sub-item-link">
                    <i class="fas fa-arrows-alt-h js__sub-color"></i>
                    <span class="js__sub-color">là ai</span>
                  </a>
                </li>
                <li class="header__width-search-sub-item">
                  <a href="#" class="header__width-search-sub-item-link">
                    <i class="fas fa-arrows-alt-h js__sub-color"></i>
                    <span class="js__sub-color">adele</span>
                  </a>
                </li>
                <li class="header__width-search-sub-item">
                  <a href="#" class="header__width-search-sub-item-link">
                    <i class="fas fa-arrows-alt-h js__sub-color"></i>
                    <span class="js__sub-color">chung tình</span>
                  </a>
                </li>
                <li class="header__width-search-sub-item">
                  <a href="#" class="header__width-search-sub-item-link">
                    <i class="fas fa-arrows-alt-h js__sub-color"></i>
                    <span class="js__sub-color">zing choice</span>
                  </a>
                </li>
                <li class="header__width-search-sub-item">
                  <a href="#" class="header__width-search-sub-item-link">
                    <i class="fas fa-arrows-alt-h js__sub-color"></i>
                    <span class="js__sub-color">#zingchart</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="header__right">
            <div class="header__theme js__sub-color js__backgroundColor">
              <i class="fas fa-tshirt"></i>
            </div>
            <div class="header__upload mobile-hiden js__sub-color js__toast js__backgroundColor hover">
              <i class="fas fa-upload"></i>
            </div>

            <div class="header__right-overlay hiden"></div>
            <!-- header__setting--active -->
            <div class="header__setting mobile-hiden js__sub-color js__backgroundColor">
              <i class="fas fa-cog header__setting-icon"></i>
              <ul class="header__setting-list">
                <li class="header__setting-item">
                  <i class="fas fa-ban"></i>
                  Danh sách chặn
                </li>
                <li class="header__setting-item">
                  <i class="far fa-play-circle"></i>
                  Chất lượng nhạc
                </li>
                <li class="header__setting-item">
                  <i class="fas fa-external-link-square-alt"></i>
                  Trình phát nhạc
                </li>
                <span class="header__setting-line"></span>
                <li class="header__setting-item">
                  <i class="fas fa-info-circle"></i>
                  Giới thiệu
                </li>
                <li class="header__setting-item">
                  <i class="far fa-flag"></i>
                  Góp ý
                </li>
                <li class="header__setting-item">
                  <i class="fas fa-phone-alt"></i>
                  Liên hệ
                </li>
                <li class="header__setting-item">
                  <i class="fab fa-adversal"></i>
                  Quảng cáo
                </li>
                <li class="header__setting-item">
                  <i class="fas fa-notes-medical"></i>
                  Thoả thuận sử dụng
                </li>
                <li class="header__setting-item">
                  <i class="fas fa-shield-alt"></i>
                  Chính sách bảo mật
                </li>
              </ul>
            </div>
            <!-- login -->
            <button class="btn-open login-link">Đăng nhập</button>

            <div class="overlay hidden"></div>

            <div class="auth--container modal hidden">
              <div class="box signin">
                <span class="borderLine"></span>
                <form id="login-form">
                  <span class="button-close-modal btn-close">
                    <i class="fas fa-times"></i>
                  </span>
                  <h2>Đăng nhập</h2>
                  <div class="inputBox">
                    <input name="username" id="username" type="text" required="required" />
                    <span>Tên đăng nhập</span>
                    <i></i>
                  </div>
                  <div class="inputBox">
                    <input name="password" id="password" type="password" required="required" />
                    <span>Mật khẩu</span>
                    <i></i>
                  </div>
                  <input type="hidden" name="form_submitted" value="1">
                  <div class="login-message" id="login-message"></div>
                  <div class="links">
                    <a href="#">Quên mật khẩu</a>
                    <a href="#" class="navigate--signup">Đăng ký</a>
                  </div>
                  <input type="submit" value="Đăng nhập" />
                </form>
              </div>
              <div class="box signup hidden">
                <span class="borderLine"></span>
                <form id='register-form'>
                  <span class="button-close-modal btn-close">
                    <i class="fas fa-times"></i>
                  </span>
                  <h2>Đăng ký</h2>
                  <div class="inputBox">
                    <input type="text" name="username" id="username-register" class="username-register" required="required" />
                    <span>Tên đăng nhập</span>
                    <i></i>
                  </div>
                  <div class="inputBox">
                    <input type="password" name="password" id="password-register" class="password-register" required="required" />
                    <span>Mật khẩu</span>
                    <i></i>
                  </div>
                  <div class="inputBox">
                    <input type="password" name="confirm" id="confirm" class="confirm" required="required" />
                    <span>Xác nhận mật khẩu</span>
                    <i></i>
                  </div>
                  <div class="register-message" id="register-message"></div>
                  <div class="links">
                    <a href="#"></a>
                    <a href="#" class="navigate--signin">Đăng nhập</a>
                  </div>
                  <input type="submit" value="Đăng ký" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main-container-pertional js__container-panes active">
        <div class="profile">
          <a href="https://www.facebook.com">
            <img hidden src="./assets/img/user/userimg2.jpg" alt="avata" class="profile__img" id="profile__img">
          </a>
          <span class="profile__name js__main-color"></span>
          <div class="profile__vip mobile-hiden">
            <span class="profile__vip-upgrate btn js__toast">Nâng cấp vip</span>
            <span class="profile__vip-entercode btn js__main-color js__backgroundColor js__toast">Nhập code vip</span>
            <span class="profile__vip-more js__main-color js__backgroundColor"><i class="fas fa-ellipsis-h"></i></span>
          </div>
        </div>

        <div class="music__option">
          <ul class="music__option-list js__backgroundColor">
            <!-- top-music__option-item -->
            <li class="tabs-item music__option-item js__main-color music__option-item--active">
              Tổng quan
            </li>
            <li class="tabs-item music__option-item js__main-color">
              Bài hát
            </li>
            <li class="tabs-item music__option-item js__main-color">
              Playlist
            </li>
            <li class="tabs-item music__option-item js__main-color">
              Nghệ sĩ
            </li>
            <li class="music__option-item mobile-hiden js__main-color js__toast">
              <i class="fas fa-ellipsis-h"></i>
            </li>
          </ul>
        </div>
        <!-- option 0 -->
        <div class="option-all panes-item active">
          <!-- song -->
          <div class="option-all__song option-all__margin_bot">
            <div class="option-heading option-all__song-heading">
              <h3 class="option-heading-name option-all__song-heading-left mobile-hiden js__main-color">
                Bài Hát
              </h3>
              <div class="option-all__song-heading-right">
                <div class="more-list mobile-hiden">
                  <span class="js__main-color">Tất cả</span>
                  <i class="fas fa-chevron-right js__main-color"></i>
                </div>
                <div class="btn option-all__song-heading-right-upload-btn mobile-hiden js__main-color js__backgroundColor">
                  <i class="fas fa-upload"></i>
                  Tải lên
                </div>
                <div class="btn option-all__song-heading-right-playall-btn js__playall-0">
                  <i class="fas fa-play"></i>
                  Phát tất cả
                </div>
              </div>
            </div>
            <div class="grid row">
              <div class="col l-3 m-0 s-0">
                <div class="option-all__song-slider">
                  <!-- first second -->
                  <img src="./assets/img/slider/0.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-first" />
                  <img src="./assets/img/slider/1.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-second" />
                  <img src="./assets/img/slider/2.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/3.jpg" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/4.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/5.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/6.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/7.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/8.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/9.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/10.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/11.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/12.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/13.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/14.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                  <img src="./assets/img/slider/15.webp" alt="anh slider" class="option-all__song-slider-img option-all__song-slider-img-third" />
                </div>
              </div>

              <div class="col l-9 m-12 s-12">
                <div class="option-all__songs">
                  <ul class="option-all__songs-list songs-list">
                    <!-- songs-item--active -->
                    <!-- <li class="songs-item songs-item--active">
                                                <div class="songs-item-left">
                                                    <img src="./assets/img/songs/0.webp" alt="danh sanh nhac" class="songs-item-left-img">
                                                    <div class="songs-item-left-body">
                                                        <h3 class="songs-item-left-body-name">Cưới Luôn Được Không</h3>
                                                        <span class="songs-item-left-body-singer">Út Nhị x KenPham Remix</span>
                                                    </div>
                                                </div>
                                                <div class="songs-item-center">
                                                    <span>Cưới Luôn Được Không (Single)</span>
                                                </div>
                                                <div class="songs-item-right">
                                                    <span class="songs-item-right-mv"><i class="fas fa-photo-video"></i></span>
                                                    <span class="songs-item-right-lyric"><i class="fas fa-microphone"></i></span>
                                                    songs-item-right-tym--active
                                                    <span class="songs-item-right-tym">
                                                        <i class="fas fa-heart songs-item-right-tym-first"></i>
                                                        <i class="far fa-heart songs-item-right-tym-last"></i>
                                                    </span>
                                                    <span class="songs-item-right-duration">04:05</span>
                                                    <span class="songs-item-right-more"><i class="fas fa-ellipsis-h"></i></span>
                                                </div>
                                            </li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- option-all__playlist -->
          <div class="option-all__playlist option-all__margin_bot">
            <div class="option-heading option-all__playlist-heading">
              <h3 class="option-heading-name js__main-color">Playlist</h3>
              <div class="more-list mobile-hiden">
                <span class="js__main-color">Tất cả</span>
                <i class="fas fa-chevron-right js__main-color"></i>
              </div>
            </div>
            <ul class="option-all__playlist-list">
              <div class="row">
                <div class="col l-2-4 m-3 s-6 mobile-margin-bot-10px">
                  <li class="option-all__playlist-item0">
                    <i class="fas fa-plus"></i>
                    <span>Tạo playlist mới</span>
                  </li>
                </div>
                <div class="col l-2-4 m-3 s-6 mobile-margin-bot-10px">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i>
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i>
                      </div>
                      <div class="option-all__playlist-item-img" style="
                              background-image: url(./assets/img/playlist/1.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content">
                      <div class="option-all__playlist-item-content-name1 js__main-color">
                        Replay
                      </div>
                      <div class="option-all__playlist-item-content-name2 js__sub-color">
                        Văn Sơn Nguyễn
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-3 s-6 mobile-margin-bot-10px">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i>
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i>
                      </div>
                      <div class="option-all__playlist-item-img" style="
                              background-image: url(./assets/img/playlist/2.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content">
                      <div class="option-all__playlist-item-content-name1 js__main-color">
                        4U - On Repeat
                      </div>
                      <div class="option-all__playlist-item-content-name2 js__sub-color">
                        Zing MP3
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-3 s-6 mobile-margin-bot-10px">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i>
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i>
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-fix" style="
                              background-image: url(./assets/img/playlist/3.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content">
                      <div class="option-all__playlist-item-content-name1 js__main-color">
                        #zingchart
                      </div>
                      <div class="option-all__playlist-item-content-name2 js__sub-color">
                        Zing MP3
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-0 s-6 mobile-margin-bot-10px">
                  <li class="option-all__playlist-item option-all__playlist-item-margin-top">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i>
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i>
                      </div>
                      <div class="option-all__playlist-item-img" style="
                              background-image: url(./assets/img/playlist/4.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content">
                      <div class="option-all__playlist-item-content-name1 js__main-color">
                        Nhạc của Văn Sơn
                      </div>
                      <div class="option-all__playlist-item-content-name2 js__sub-color">
                        Zing MP3
                      </div>
                    </div>
                  </li>
                </div>
              </div>
            </ul>
          </div>

          <!-- option-all__mv -->
          <div class="option-all__playlist option-all__margin_bot">
            <div class="option-heading option-all__playlist-heading">
              <h3 class="option-heading-name js__main-color">MV</h3>
              <div class="more-list mobile-hiden">
                <span class="js__main-color">Tất cả</span>
                <i class="fas fa-chevron-right js__main-color"></i>
              </div>
            </div>
            <ul class="option-all__playlist-list">
              <div class="row">
                <div class="col l-4 m-4 s-12 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-mv" style="
                              background-image: url(./assets/img/mv/1.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-mv">
                      <img src="./assets/img/mv/icon1.jpg" alt="thanh hung" class="option-all__playlist-item-content-img" />
                      <div class="option-all__playlist-item-content-name">
                        <div class="option-all__playlist-item-content-name1 js__main-color">
                          Thay Tôi Yêu Cô Ấy
                        </div>
                        <div class="option-all__playlist-item-content-name2 js__sub-color">
                          Thanh Hưng
                        </div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-4 m-4 s-12 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-mv" style="
                              background-image: url(./assets/img/mv/2.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-mv">
                      <img src="./assets/img/mv/icon2.jpg" alt="Han Sara" class="option-all__playlist-item-content-img" />
                      <div class="option-all__playlist-item-content-name">
                        <div class="option-all__playlist-item-content-name1 js__main-color">
                          Đếm Cừu
                        </div>
                        <div class="option-all__playlist-item-content-name2 js__sub-color">
                          Han Sara, Kay Trần
                        </div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-4 m-4 s-12 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-mv" style="
                              background-image: url(./assets/img/mv/3.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-mv">
                      <img src="./assets/img/mv/icon3.jpg" alt="Alex Sensation" class="option-all__playlist-item-content-img" />
                      <div class="option-all__playlist-item-content-name">
                        <div class="option-all__playlist-item-content-name1 js__main-color">
                          Que Va
                        </div>
                        <div class="option-all__playlist-item-content-name2 js__sub-color">
                          Alex Sensation, Ozuna
                        </div>
                      </div>
                    </div>
                  </li>
                </div>
              </div>
            </ul>
          </div>
          <!-- option-singer -->
          <div class="option-all__playlist option-all__margin_bot">
            <div class="option-heading option-all__playlist-heading">
              <h3 class="option-heading-name js__main-color">Nghệ Sĩ</h3>
              <div class="more-list mobile-hiden">
                <span class="js__main-color">Tất cả</span>
                <i class="fas fa-chevron-right js__main-color"></i>
              </div>
            </div>
            <ul class="option-all__playlist-list">
              <div class="row">
                <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                    <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                              background-image: url(./assets/img/singer/1.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-singer">
                      <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                        Mr.Siro
                      </div>
                      <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                        757K quan tâm
                      </div>
                      <div class="option-all__playlist-item-content-singer-profile">
                        <i class="fas fa-random js__main-color"></i>
                        <span class="js__main-color">Góc nhạc</span>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                    <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                              background-image: url(./assets/img/singer/2.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-singer">
                      <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                        Bích Phương
                      </div>
                      <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                        381K quan tâm
                      </div>
                      <div class="option-all__playlist-item-content-singer-profile">
                        <i class="fas fa-random js__main-color"></i>
                        <span class="js__main-color">Góc nhạc</span>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                    <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                              background-image: url(./assets/img/singer/3.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-singer">
                      <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                        SOOBIN
                      </div>
                      <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                        466K quan tâm
                      </div>
                      <div class="option-all__playlist-item-content-singer-profile">
                        <i class="fas fa-random js__main-color"></i>
                        <span class="js__main-color">Góc nhạc</span>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                    <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                              background-image: url(./assets/img/singer/4.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-singer">
                      <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                        Sơn Tùng M-TP
                      </div>
                      <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                        2.2M quan tâm
                      </div>
                      <div class="option-all__playlist-item-content-singer-profile">
                        <i class="fas fa-random js__main-color"></i>
                        <span class="js__main-color">Góc nhạc</span>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                    <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                              background-image: url(./assets/img/singer/5.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-singer">
                      <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                        Hương Ly
                      </div>
                      <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                        604K quan tâm
                      </div>
                      <div class="option-all__playlist-item-content-singer-profile">
                        <i class="fas fa-random js__main-color"></i>
                        <span class="js__main-color">Góc nhạc</span>
                      </div>
                    </div>
                  </li>
                </div>
              </div>
            </ul>
          </div>
        </div>
        <!-- option 1 -->
        <div class="option-music panes-item">
          <div class="option-heading option-all__song-heading">
            <h3 class="option-heading-name option-all__song-heading-left js__main-color">
              Bài Hát
            </h3>
            <div class="option-all__song-heading-right">
              <div class="more-list">
                <span class="js__main-color">Tất cả</span>
                <i class="fas fa-chevron-right js__main-color"></i>
              </div>
              <div class="btn option-all__song-heading-right-upload-btn js__main-color js__backgroundColor">
                <i class="fas fa-upload"></i>
                Tải lên
              </div>
              <div class="btn option-all__song-heading-right-playall-btn js__playall-1">
                <i class="fas fa-play"></i>
                Phát tất cả
              </div>
            </div>
          </div>
          <div class="grid row">
            <ul class="option-music-list songs-list">
              <!-- songs-item--active -->
              <!-- <li class="songs-item songs-item--active">
                                    <div class="songs-item-left">
                                        <img src="./assets/img/songs/0.webp" alt="danh sanh nhac" class="songs-item-left-img">
                                        <div class="songs-item-left-body">
                                            <h3 class="songs-item-left-body-name">Cưới Luôn Được Không</h3>
                                            <span class="songs-item-left-body-singer">Út Nhị x KenPham Remix</span>
                                        </div>
                                    </div>
                                    <div class="songs-item-center">
                                        <span>Cưới Luôn Được Không (Single)</span>
                                    </div>
                                    <div class="songs-item-right">
                                        <span class="songs-item-right-mv"><i class="fas fa-photo-video"></i></span>
                                        <span class="songs-item-right-lyric"><i class="fas fa-microphone"></i></span>
                                        songs-item-right-tym--active
                                        <span class="songs-item-right-tym">
                                            <i class="fas fa-heart songs-item-right-tym-first"></i>
                                            <i class="far fa-heart songs-item-right-tym-last"></i>
                                        </span>
                                        <span class="songs-item-right-duration">04:05</span>
                                        <span class="songs-item-right-more"><i class="fas fa-ellipsis-h"></i></span>
                                    </div>
                                </li> -->
            </ul>
          </div>
        </div>
        <!-- option 2 -->
        <div class="option-playlist panes-item">
          <div class="option-all__playlist option-all__margin_bot">
            <div class="option-heading option-all__playlist-heading mobile-hiden">
              <h3 class="option-heading-name js__main-color">Playlist</h3>
              <div class="more-list">
                <span class="js__main-color">Tất cả</span>
                <i class="fas fa-chevron-right js__main-color"></i>
              </div>
            </div>
            <ul class="option-all__playlist-list">
              <div class="row">
                <div class="col l-2-4 m-3 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item0">
                    <i class="fas fa-plus"></i>
                    <span>Tạo playlist mới</span>
                  </li>
                </div>
                <div class="col l-2-4 m-3 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i>
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i>
                      </div>
                      <div class="option-all__playlist-item-img" style="
                              background-image: url(./assets/img/playlist/1.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content">
                      <div class="option-all__playlist-item-content-name1 js__main-color">
                        Replay
                      </div>
                      <div class="option-all__playlist-item-content-name2 js__sub-color">
                        Điệp-Duy-Tài
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-3 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i>
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i>
                      </div>
                      <div class="option-all__playlist-item-img" style="
                              background-image: url(./assets/img/playlist/2.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content">
                      <div class="option-all__playlist-item-content-name1 js__main-color">
                        4U - On Repeat
                      </div>
                      <div class="option-all__playlist-item-content-name2 js__sub-color">
                        Zing MP3
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-3 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i>
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i>
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-fix" style="
                              background-image: url(./assets/img/playlist/3.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content">
                      <div class="option-all__playlist-item-content-name1 js__main-color">
                        #zingchart
                      </div>
                      <div class="option-all__playlist-item-content-name2 js__sub-color">
                        Zing MP3
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-0 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i>
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i>
                      </div>
                      <div class="option-all__playlist-item-img" style="
                              background-image: url(./assets/img/playlist/4.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content">
                      <div class="option-all__playlist-item-content-name1 js__main-color">
                        Nhạc của Văn Sơn
                      </div>
                      <div class="option-all__playlist-item-content-name2 js__sub-color">
                        Zing MP3
                      </div>
                    </div>
                  </li>
                </div>
              </div>
            </ul>
          </div>

          <div class="option-all__playlist option-all__margin_bot mobile-hiden">
            <div class="option-heading option-all__playlist-heading">
              <h3 class="option-heading-name js__main-color">MV</h3>
              <div class="more-list">
                <span class="js__main-color">Tất cả</span>
                <i class="fas fa-chevron-right js__main-color"></i>
              </div>
            </div>
            <ul class="option-all__playlist-list">
              <div class="row">
                <div class="col l-4 m-4">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-mv" style="
                              background-image: url(./assets/img/mv/1.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-mv">
                      <img src="./assets/img/mv/icon1.jpg" alt="thanh hung" class="option-all__playlist-item-content-img" />
                      <div class="option-all__playlist-item-content-name">
                        <div class="option-all__playlist-item-content-name1 js__main-color">
                          Thay Tôi Yêu Cô Ấy
                        </div>
                        <div class="option-all__playlist-item-content-name2 js__sub-color">
                          Thanh Hưng
                        </div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-4 m-4">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-mv" style="
                              background-image: url(./assets/img/mv/2.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-mv">
                      <img src="./assets/img/mv/icon2.jpg" alt="Han Sara" class="option-all__playlist-item-content-img" />
                      <div class="option-all__playlist-item-content-name">
                        <div class="option-all__playlist-item-content-name1 js__main-color">
                          Đếm Cừu
                        </div>
                        <div class="option-all__playlist-item-content-name2 js__sub-color">
                          Han Sara, Kay Trần
                        </div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-4 m-4">
                  <li class="option-all__playlist-item">
                    <div class="option-all__playlist-item-img-wrapper">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-mv" style="
                              background-image: url(./assets/img/mv/3.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-mv">
                      <img src="./assets/img/mv/icon3.jpg" alt="Alex Sensation" class="option-all__playlist-item-content-img" />
                      <div class="option-all__playlist-item-content-name">
                        <div class="option-all__playlist-item-content-name1 js__main-color">
                          Que Va
                        </div>
                        <div class="option-all__playlist-item-content-name2 js__sub-color">
                          Alex Sensation, Ozuna
                        </div>
                      </div>
                    </div>
                  </li>
                </div>
              </div>
            </ul>
          </div>
        </div>
        <!-- option 3 -->
        <div class="option-singer panes-item">
          <div class="option-all__playlist option-all__margin_bot">
            <div class="option-heading option-all__playlist-heading mobile-hiden">
              <h3 class="option-heading-name js__main-color">Nghệ Sĩ</h3>
              <div class="more-list">
                <span class="js__main-color">Tất cả</span>
                <i class="fas fa-chevron-right js__main-color"></i>
              </div>
            </div>
            <ul class="option-all__playlist-list">
              <div class="row">
                <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                    <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                              background-image: url(./assets/img/singer/1.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-singer">
                      <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                        Mr.Siro
                      </div>
                      <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                        757K quan tâm
                      </div>
                      <div class="option-all__playlist-item-content-singer-profile">
                        <i class="fas fa-random js__main-color"></i>
                        <span class="js__main-color">Góc nhạc</span>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                    <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                              background-image: url(./assets/img/singer/2.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-singer">
                      <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                        Bích Phương
                      </div>
                      <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                        381K quan tâm
                      </div>
                      <div class="option-all__playlist-item-content-singer-profile">
                        <i class="fas fa-random js__main-color"></i>
                        <span class="js__main-color">Góc nhạc</span>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                    <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                              background-image: url(./assets/img/singer/3.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-singer">
                      <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                        SOOBIN
                      </div>
                      <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                        466K quan tâm
                      </div>
                      <div class="option-all__playlist-item-content-singer-profile">
                        <i class="fas fa-random js__main-color"></i>
                        <span class="js__main-color">Góc nhạc</span>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                    <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                              background-image: url(./assets/img/singer/4.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-singer">
                      <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                        Sơn Tùng M-TP
                      </div>
                      <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                        2.2M quan tâm
                      </div>
                      <div class="option-all__playlist-item-content-singer-profile">
                        <i class="fas fa-random js__main-color"></i>
                        <span class="js__main-color">Góc nhạc</span>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                  <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                    <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                      <div class="option-all__playlist-item-img-wrapper-action">
                        <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                        <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                        <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                      </div>
                      <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                              background-image: url(./assets/img/singer/5.webp);
                            "></div>
                    </div>
                    <div class="option-all__playlist-item-content-singer">
                      <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                        Hương Ly
                      </div>
                      <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                        604K quan tâm
                      </div>
                      <div class="option-all__playlist-item-content-singer-profile">
                        <i class="fas fa-random js__main-color"></i>
                        <span class="js__main-color">Góc nhạc</span>
                      </div>
                    </div>
                  </li>
                </div>
              </div>
            </ul>
          </div>
        </div>
      </div>

      <div class="main-container-discover js__container-panes">
        <!-- part slider -->
        <div class="container-discover__slider">
          <div class="container-discover__slider-item container-discover__slider-item-first">
            <img src="./assets/img/slider-discover/1.jpg" alt="anh" class="container-discover__slider-item-img" />
          </div>
          <div class="container-discover__slider-item container-discover__slider-item-second">
            <img src="./assets/img/slider-discover/2.jpg" alt="anh" class="container-discover__slider-item-img" />
          </div>
          <div class="container-discover__slider-item container-discover__slider-item-third">
            <img src="./assets/img/slider-discover/3.jpg" alt="anh" class="container-discover__slider-item-img" />
          </div>
          <div class="container-discover__slider-item container-discover__slider-item-four">
            <img src="./assets/img/slider-discover/4.jpg" alt="anh" class="container-discover__slider-item-img" />
          </div>
          <div class="container-discover__slider-left mobile-hiden js__container-discover__slider-left">
            <i class="fas fa-chevron-left js__main-color"></i>
          </div>
          <div class="container-discover__slider-right mobile-hiden js__container-discover__slider-right">
            <i class="fas fa-chevron-right js__main-color"></i>
          </div>
        </div>
        <!-- part playlist -->
        <div class="container-discover__playlist option-all__playlist option-all__margin_bot">
          <div class="option-heading option-all__playlist-heading">
            <h3 class="option-heading-name white-color js__main-color">
              Playlist
            </h3>
            <div class="more-list mobile-hiden">
              <span class="js__main-color">Tất cả</span>
              <i class="fas fa-chevron-right js__main-color"></i>
            </div>
          </div>
          <ul class="option-all__playlist-list">
            <div class="row">
              <div class="col l-2-4 m-3 s-6 mobile-margin-bot-30px">
                <li class="option-all__playlist-item0">
                  <i class="fas fa-plus white-color"></i>
                  <span class="white-color">Tạo playlist mới</span>
                </li>
              </div>
              <div class="col l-2-4 m-3 s-6 mobile-margin-bot-30px">
                <li class="option-all__playlist-item">
                  <div class="option-all__playlist-item-img-wrapper">
                    <div class="option-all__playlist-item-img-wrapper-action">
                      <i class="white-color fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i>
                      <i class="white-color fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                      <i class="white-color fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i>
                    </div>
                    <div class="option-all__playlist-item-img" style="
                            background-image: url(./assets/img/playlist/1.webp);
                          "></div>
                  </div>
                  <div class="option-all__playlist-item-content">
                    <div class="option-all__playlist-item-content-name1 js__main-color white-color">
                      Replay
                    </div>
                    <div class="option-all__playlist-item-content-name2 js__sub-color">
                      Văn Sơn Nguyễn
                    </div>
                  </div>
                </li>
              </div>
              <div class="col l-2-4 m-3 s-6 mobile-margin-bot-30px">
                <li class="option-all__playlist-item">
                  <div class="option-all__playlist-item-img-wrapper">
                    <div class="option-all__playlist-item-img-wrapper-action">
                      <i class="white-color fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i>
                      <i class="white-color fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                      <i class="white-color fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i>
                    </div>
                    <div class="option-all__playlist-item-img" style="
                            background-image: url(./assets/img/playlist/2.webp);
                          "></div>
                  </div>
                  <div class="option-all__playlist-item-content">
                    <div class="option-all__playlist-item-content-name1 js__main-color white-color">
                      4U - On Repeat
                    </div>
                    <div class="option-all__playlist-item-content-name2 js__sub-color">
                      Zing MP3
                    </div>
                  </div>
                </li>
              </div>
              <div class="col l-2-4 m-3 s-6 mobile-margin-bot-30px">
                <li class="option-all__playlist-item">
                  <div class="option-all__playlist-item-img-wrapper">
                    <div class="option-all__playlist-item-img-wrapper-action">
                      <i class="white-color fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i>
                      <i class="white-color fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                      <i class="white-color fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i>
                    </div>
                    <div class="option-all__playlist-item-img option-all__playlist-item-img-fix" style="
                            background-image: url(./assets/img/playlist/3.webp);
                          "></div>
                  </div>
                  <div class="option-all__playlist-item-content">
                    <div class="option-all__playlist-item-content-name1 js__main-color white-color">
                      #zingchart
                    </div>
                    <div class="option-all__playlist-item-content-name2 js__sub-color">
                      Zing MP3
                    </div>
                  </div>
                </li>
              </div>
              <div class="col l-2-4 m-0 s-6 mobile-margin-bot-30px">
                <li class="option-all__playlist-item">
                  <div class="option-all__playlist-item-img-wrapper">
                    <div class="option-all__playlist-item-img-wrapper-action">
                      <i class="white-color fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i>
                      <i class="white-color fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                      <i class="white-color fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i>
                    </div>
                    <div class="option-all__playlist-item-img" style="
                            background-image: url(./assets/img/playlist/4.webp);
                          "></div>
                  </div>
                  <div class="option-all__playlist-item-content">
                    <div class="option-all__playlist-item-content-name1 js__main-color white-color">
                      Nhạc của Văn Sơn
                    </div>
                    <div class="option-all__playlist-item-content-name2 js__sub-color">
                      Zing MP3
                    </div>
                  </div>
                </li>
              </div>
            </div>
          </ul>
        </div>
        <!-- discover all__mv -->
        <div class="option-all__playlist option-all__margin_bot">
          <div class="option-heading option-all__playlist-heading">
            <h3 class="option-heading-name js__main-color">MV</h3>
            <div class="more-list mobile-hiden">
              <span class="js__main-color">Tất cả</span>
              <i class="fas fa-chevron-right js__main-color"></i>
            </div>
          </div>
          <ul class="option-all__playlist-list">
            <div class="row">
              <div class="col l-4 m-4 s-12 mobile-margin-bot-30px">
                <li class="option-all__playlist-item">
                  <div class="option-all__playlist-item-img-wrapper">
                    <div class="option-all__playlist-item-img-wrapper-action">
                      <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                      <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                      <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                    </div>
                    <div class="option-all__playlist-item-img option-all__playlist-item-img-mv" style="background-image: url(./assets/img/mv/1.webp)"></div>
                  </div>
                  <div class="option-all__playlist-item-content-mv">
                    <img src="./assets/img/mv/icon1.jpg" alt="thanh hung" class="option-all__playlist-item-content-img" />
                    <div class="option-all__playlist-item-content-name">
                      <div class="option-all__playlist-item-content-name1 js__main-color">
                        Thay Tôi Yêu Cô Ấy
                      </div>
                      <div class="option-all__playlist-item-content-name2 js__sub-color">
                        Thanh Hưng
                      </div>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col l-4 m-4 s-12 mobile-margin-bot-30px">
                <li class="option-all__playlist-item">
                  <div class="option-all__playlist-item-img-wrapper">
                    <div class="option-all__playlist-item-img-wrapper-action">
                      <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                      <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                      <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                    </div>
                    <div class="option-all__playlist-item-img option-all__playlist-item-img-mv" style="background-image: url(./assets/img/mv/2.webp)"></div>
                  </div>
                  <div class="option-all__playlist-item-content-mv">
                    <img src="./assets/img/mv/icon2.jpg" alt="Han Sara" class="option-all__playlist-item-content-img" />
                    <div class="option-all__playlist-item-content-name">
                      <div class="option-all__playlist-item-content-name1 js__main-color">
                        Đếm Cừu
                      </div>
                      <div class="option-all__playlist-item-content-name2 js__sub-color">
                        Han Sara, Kay Trần
                      </div>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col l-4 m-4 s-12 mobile-margin-bot-30px">
                <li class="option-all__playlist-item">
                  <div class="option-all__playlist-item-img-wrapper">
                    <div class="option-all__playlist-item-img-wrapper-action">
                      <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                      <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                      <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                    </div>
                    <div class="option-all__playlist-item-img option-all__playlist-item-img-mv" style="background-image: url(./assets/img/mv/3.webp)"></div>
                  </div>
                  <div class="option-all__playlist-item-content-mv">
                    <img src="./assets/img/mv/icon3.jpg" alt="Alex Sensation" class="option-all__playlist-item-content-img" />
                    <div class="option-all__playlist-item-content-name">
                      <div class="option-all__playlist-item-content-name1 js__main-color">
                        Que Va
                      </div>
                      <div class="option-all__playlist-item-content-name2 js__sub-color">
                        Alex Sensation, Ozuna
                      </div>
                    </div>
                  </div>
                </li>
              </div>
            </div>
          </ul>
        </div>
        <!-- discpver singer -->
        <div class="option-all__playlist option-all__margin_bot">
          <div class="option-heading option-all__playlist-heading">
            <h3 class="option-heading-name js__main-color">Nghệ Sĩ</h3>
            <div class="more-list mobile-hiden">
              <span class="js__main-color">Tất cả</span>
              <i class="fas fa-chevron-right js__main-color"></i>
            </div>
          </div>
          <ul class="option-all__playlist-list">
            <div class="row">
              <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                  <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                    <div class="option-all__playlist-item-img-wrapper-action">
                      <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                      <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                      <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                    </div>
                    <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                            background-image: url(./assets/img/singer/1.webp);
                          "></div>
                  </div>
                  <div class="option-all__playlist-item-content-singer">
                    <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                      Mr.Siro
                    </div>
                    <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                      757K quan tâm
                    </div>
                    <div class="option-all__playlist-item-content-singer-profile">
                      <i class="fas fa-random js__main-color"></i>
                      <span class="js__main-color">Góc nhạc</span>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                  <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                    <div class="option-all__playlist-item-img-wrapper-action">
                      <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                      <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                      <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                    </div>
                    <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                            background-image: url(./assets/img/singer/2.webp);
                          "></div>
                  </div>
                  <div class="option-all__playlist-item-content-singer">
                    <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                      Bích Phương
                    </div>
                    <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                      381K quan tâm
                    </div>
                    <div class="option-all__playlist-item-content-singer-profile">
                      <i class="fas fa-random js__main-color"></i>
                      <span class="js__main-color">Góc nhạc</span>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                  <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                    <div class="option-all__playlist-item-img-wrapper-action">
                      <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                      <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                      <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                    </div>
                    <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                            background-image: url(./assets/img/singer/3.webp);
                          "></div>
                  </div>
                  <div class="option-all__playlist-item-content-singer">
                    <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                      SOOBIN
                    </div>
                    <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                      466K quan tâm
                    </div>
                    <div class="option-all__playlist-item-content-singer-profile">
                      <i class="fas fa-random js__main-color"></i>
                      <span class="js__main-color">Góc nhạc</span>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                  <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                    <div class="option-all__playlist-item-img-wrapper-action">
                      <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                      <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                      <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                    </div>
                    <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                            background-image: url(./assets/img/singer/4.webp);
                          "></div>
                  </div>
                  <div class="option-all__playlist-item-content-singer">
                    <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                      Sơn Tùng M-TP
                    </div>
                    <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                      2.2M quan tâm
                    </div>
                    <div class="option-all__playlist-item-content-singer-profile">
                      <i class="fas fa-random js__main-color"></i>
                      <span class="js__main-color">Góc nhạc</span>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px">
                <li class="option-all__playlist-item option-all__playlist-item-margin_top">
                  <div class="option-all__playlist-item-img-wrapper option-all__playlist-item-img-wrapper-mv">
                    <div class="option-all__playlist-item-img-wrapper-action">
                      <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                      <i class="fas fa-play option-all__playlist-item-img-wrapper-action-icon2"></i>
                      <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                    </div>
                    <div class="option-all__playlist-item-img option-all__playlist-item-img-singer" style="
                            background-image: url(./assets/img/singer/5.webp);
                          "></div>
                  </div>
                  <div class="option-all__playlist-item-content-singer">
                    <div class="option-all__playlist-item-content-singer-name1 js__main-color">
                      Hương Ly
                    </div>
                    <div class="option-all__playlist-item-content-singer-name2 js__sub-color">
                      604K quan tâm
                    </div>
                    <div class="option-all__playlist-item-content-singer-profile">
                      <i class="fas fa-random js__main-color"></i>
                      <span class="js__main-color">Góc nhạc</span>
                    </div>
                  </div>
                </li>
              </div>
            </div>
          </ul>
        </div>
      </div>

      <div class="main-container-zingchart js__container-panes">
        <div class="zingchart__headding js__main-color">#zingchart</div>
        <ul class="zingchart__list js__zingchart__list"></ul>
        <div class="zingchart__100more">
          <span class="zingchart__100more-body js__main-color js__border js__zingchart__100more">Xem top 100</span>
        </div>
        <div class="zingchart-week__headding zingchart__headding js__main-color">
          Bảng Xếp Hạng Tuần
        </div>
        <div class="row">
          <div class="col l-4 laptop-l-6 m-12 s-12">
            <div class="zingchart-week__item-wrapper js__backgroundColor">
              <span class="zingchart-week__headding js__main-color">Việt Nam</span>
              <ul class="zingchart-week__list">
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">1</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/0.webp" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Tình Yêu Ngủ Quên</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Hoàng Tôn, LyHan, Orinn
                        Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    05:08
                  </div>
                </li>
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">2</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/1.webp" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Váy Cưới</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Thuỳ Duyên Cover, Huy
                        Lee Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    04:20
                  </div>
                </li>
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">3</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/2.webp" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Yêu Đừng Sợ Đau</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Ngô Lan Hương, Cukak
                        Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    04:56
                  </div>
                </li>
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">4</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/3.jpg" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Có Hẹn Với Thanh
                        Xuân</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Monstar ,1967
                        Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    05:26
                  </div>
                </li>
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">5</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/4.webp" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Vui Lắm Nha</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Hương Ly, Jombie, RIN
                        Music Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    03:56
                  </div>
                </li>
              </ul>
              <div class="zingchart__100more zingchart-week__100more">
                <span class="zingchart__100more-body js__main-color js__border">Xem tất cả</span>
              </div>
            </div>
          </div>
          <div class="col l-4 laptop-l-6 m-12 s-12">
            <div class="zingchart-week__item-wrapper js__backgroundColor">
              <span class="zingchart-week__headding js__main-color">US-UK</span>
              <ul class="zingchart-week__list">
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">1</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/0.webp" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Tình Yêu Ngủ Quên</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Hoàng Tôn, LyHan, Orinn
                        Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    05:08
                  </div>
                </li>
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">2</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/1.webp" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Váy Cưới</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Thuỳ Duyên Cover, Huy
                        Lee Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    04:20
                  </div>
                </li>
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">3</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/2.webp" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Yêu Đừng Sợ Đau</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Ngô Lan Hương, Cukak
                        Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    04:56
                  </div>
                </li>
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">4</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/3.jpg" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Có Hẹn Với Thanh
                        Xuân</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Monstar ,1967
                        Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    05:26
                  </div>
                </li>
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">5</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/4.webp" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Vui Lắm Nha</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Hương Ly, Jombie, RIN
                        Music Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    03:56
                  </div>
                </li>
              </ul>
              <div class="zingchart__100more zingchart-week__100more">
                <span class="zingchart__100more-body js__main-color js__border">Xem tất cả</span>
              </div>
            </div>
          </div>
          <div class="col l-4 laptop-l-6 m-12 s-12">
            <div class="zingchart-week__item-wrapper js__backgroundColor">
              <span class="zingchart-week__headding js__main-color">K-Pop</span>
              <ul class="zingchart-week__list">
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">1</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/0.webp" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Tình Yêu Ngủ Quên</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Hoàng Tôn, LyHan, Orinn
                        Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    05:08
                  </div>
                </li>
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">2</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/1.webp" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Váy Cưới</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Thuỳ Duyên Cover, Huy
                        Lee Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    04:20
                  </div>
                </li>
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">3</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/2.webp" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Yêu Đừng Sợ Đau</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Ngô Lan Hương, Cukak
                        Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    04:56
                  </div>
                </li>
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">4</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/3.jpg" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Có Hẹn Với Thanh
                        Xuân</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Monstar ,1967
                        Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    05:26
                  </div>
                </li>
                <li class="zingchart-week__item">
                  <div class="zingchart-week__item-left">
                    <span class="zingchart__item-left-stt zingchart-week__item-left-stt">5</span>
                    <span class="zingchart__item-left-line zingchart-week__item-left-line">-</span>
                  </div>
                  <div class="zingchart-week__item-center">
                    <img src="./assets/img/songs/4.webp" alt="anh" class="zingchart-week__item-center-img" />
                    <div class="zingchart-week__item-center-content">
                      <span class="js__main-color zingchart-week__item-center-content-name">Vui Lắm Nha</span>
                      <span class="js__main-color zingchart-week__item-center-content-singer">Hương Ly, Jombie, RIN
                        Music Remix</span>
                    </div>
                  </div>
                  <div class="zingchart-week__item-right mobile-hiden js__main-color">
                    03:56
                  </div>
                </li>
              </ul>
              <div class="zingchart__100more zingchart-week__100more">
                <span class="zingchart__100more-body js__main-color js__border">Xem tất cả</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END CONTAINER -->

    <!-- LIST SONG MOBILE -->
    <!-- <div class="container-mobile">
                tesst
            </div> -->

    <!-- theme modal -->
    <!-- theme-modal--avtive -->
    <div class="theme-modal">
      <div class="theme-modal__overlay"></div>
      <div class="theme-modal__body">
        <div class="theme-modal__close-btn">
          <i class="fas fa-times"></i>
        </div>
        <h3 class="theme-modal__body-headding js__main-color">Giao diện</h3>
        <div class="theme-modal__body-group-wrapper">
          <div class="theme-modal__body-group">
            <span class="theme-modal__body-group-headding js__main-color">Chủ đề</span>
            <ul class="theme-modal__body-group-list">
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme1/theme1.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Zing Music Awards</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme1/theme2.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Tháp Eiffel</span>
              </li>
            </ul>
          </div>

          <div class="theme-modal__body-group">
            <span class="theme-modal__body-group-headding js__main-color">Nghệ Sĩ</span>
            <ul class="theme-modal__body-group-list">
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme2/theme1.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Rosé</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme2/theme2.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">IU</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img-wrapper">
                    <div class="theme-modal__body-group-item-img" style="
                            background-image: url(./assets/img/background-theme/modalThemes/modalTheme2/theme3.jpg);
                          "></div>
                  </div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Ji Chang Wook</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img-wrapper">
                    <div class="theme-modal__body-group-item-img" style="
                            background-image: url(./assets/img/background-theme/modalThemes/modalTheme2/theme4.jpg);
                          "></div>
                  </div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Lisa</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme2/theme5.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Jennie Kim</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme2/theme6.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Jisoo</span>
              </li>
            </ul>
          </div>
          <div class="theme-modal__body-group">
            <span class="theme-modal__body-group-headding js__main-color">Màu tối</span>
            <ul class="theme-modal__body-group-list">
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme3/theme1.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Tối</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme3/theme2.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Tím</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme3/theme3.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Xanh đậm</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme3/theme4.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Xanh biển</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme3/theme5.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Xanh lá</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme3/theme6.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Nâu</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme3/theme7.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Hồng</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme3/theme8.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Đỏ</span>
              </li>
            </ul>
          </div>
          <div class="theme-modal__body-group">
            <span class="theme-modal__body-group-headding js__main-color">Màu sáng</span>
            <ul class="theme-modal__body-group-list">
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme4/theme1.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Sáng</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme4/theme2.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Xám</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme4/theme3.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Xanh nhạt</span>
              </li>
              <li class="theme-modal__body-group-item js-theme-item">
                <div class="theme-modal__body-group-item-img-wrapper">
                  <div class="theme-modal__body-group-item-img" style="
                          background-image: url(./assets/img/background-theme/modalThemes/modalTheme4/theme4.jpg);
                        "></div>
                </div>
                <span class="theme-modal__body-group-item-name js__main-color">Hồng cánh sen</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- BEGIN NEXT-SONG -->
    <div class="main-nextsong mobile-tablet-hiden">
      <div class="nextsong__option">
        <div class="nextsong__option-wrapper">
          <!-- nextsong__option-wrapper--active -->
          <div class="nextsong__option-wrapper-listplay nextsong__option-wrapper--active js__toast js__main-color">
            Danh sách phát
          </div>
          <div class="nextsong__option-wrapper-history js__sub-color js__toast">
            Nghe gần đây
          </div>
        </div>
        <div class="nextsong__option-alarm laptop-hiden js__toast">
          <i class="fas fa-stopwatch js__main-color"></i>
        </div>
        <div class="nextsong__option-more laptop-hiden js__toast">
          <i class="fas fa-ellipsis-h js__main-color"></i>
        </div>
      </div>
      <div class="nextsong__box">
        <div class="nextsong__fist">
          <!-- <div class="nextsong__fist-item nextsong__item">
                            <div class="nextsong__item-img" style="background-image: url(./assets/img/next-song/0.webp);">
                                <div class="nextsong__item-playbtn"><i class="fas fa-play"></i></div>
                            </div>
                            <div class="nextsong__item-body">
                                <span class="nextsong__item-body-heading">Là Ai Từ Bỏ, Là Ai Vô Tình</span>
                                <span class="nextsong__item-body-depsc">Hương Ly, Jombie</span>
                            </div>
                            <div class="nextsong__item-action">
                                nextsong__item-action-heart--unheart
                                <span class="nextsong__item-action-heart">
                                    <i class="fas fa-heart nextsong__item-action-heart-icon1"></i>
                                    <i class="far fa-heart nextsong__item-action-heart-icon2"></i>
                                </span>
                                <span class="nextsong__item-action-dot">
                                    <i class="fas fa-ellipsis-h "></i>
                                </span>
                            </div>
                        </div> -->
        </div>
        <div class="nextsong__last">
          <h3 class="nextsong__last-heading js__main-color">Tiếp theo</h3>
          <ul class="nextsong__last-list">
            <!-- <li class="nextsong__last-item nextsong__item">
                                <div class="nextsong__item-img" style="background-image: url(./assets/img/next-song/1.webp);">
                                    <div class="nextsong__item-playbtn"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="nextsong__item-body">
                                    <span class="nextsong__item-body-heading">Yêu Là Cưới</span>
                                    <span class="nextsong__item-body-depsc">Phát Hồ, X2X</span>
                                </div>
                                <div class="nextsong__item-action">
                                    nextsong__item-action-heart--unheart
                                    <span class="nextsong__item-action-heart">
                                        <i class="fas fa-heart nextsong__item-action-heart-icon1"></i>
                                        <i class="far fa-heart nextsong__item-action-heart-icon2"></i>
                                    </span>
                                    <span class="nextsong__item-action-dot">
                                        <i class="fas fa-ellipsis-h "></i>
                                    </span>
                                </div>
                            </li> -->
          </ul>
        </div>
      </div>
    </div>
    <!-- END NEXT-SONG -->

    <!-- BEGIN TAB ON MOBILE -->
    <div class="mobile-tab">
      <ul class="mobile-tab__list">
        <li class="mobile-tab__item active js__mobile-tab__item js__main-color">
          <i class="far fa-play-circle"></i>
          Cá Nhân
        </li>
        <li class="mobile-tab__item js__mobile-tab__item js__main-color">
          <i class="fas fa-compact-disc"></i>
          Khám Phá
        </li>
        <li class="mobile-tab__item js__mobile-tab__item js__main-color">
          <i class="fas fa-chart-line"></i>
          #zingchart
        </li>
        <li class="mobile-tab__item js__main-color">
          <i class="fas fa-broadcast-tower"></i>
          Radio
        </li>
        <li class="mobile-tab__item js__main-color">
          <i class="far fa-list-alt"></i>
          Theo Dõi
        </li>
      </ul>
    </div>
    <!-- END TAB ON MOBILE -->

    <!-- BEGIN MUSIC CONTROL -->
    <div class="main-music-control">
      <div class="row">
        <div class="col l-3 m-3 s-8">
          <div class="music-control__left">
            <div class="music-control__left-img-box">
              <div class="music-control__left-img" style="background-image: url(./assets/img/songs/0.webp)"></div>
              <!-- <div class="music-control__left-vetinh">
                                    <svg fill="#fff" viewBox="0 0 512 512" class="img-note vetinh-1">
                                        <path
                                            d="M470.38 1.51L150.41 96A32 32 0 0 0 128 126.51v261.41A139 139 0 0 0 96 384c-53 0-96 28.66-96 64s43 64 96 64 96-28.66 96-64V214.32l256-75v184.61a138.4 138.4 0 0 0-32-3.93c-53 0-96 28.66-96 64s43 64 96 64 96-28.65 96-64V32a32 32 0 0 0-41.62-30.49z"
                                        ></path>
                                    </svg>
                                    <svg fill="#fff" viewBox="0 0 384 512" class="img-note vetinh-2">
                                        <path d="M310.94 1.33l-96.53 28.51A32 32 0 0 0 192 60.34V360a148.76 148.76 0 0 0-48-8c-61.86 0-112 35.82-112 80s50.14 80 112 80 112-35.82 112-80V148.15l73-21.39a32 32 0 0 0 23-30.71V32a32 32 0 0 0-41.06-30.67z"></path>
                                    </svg>
                                    <svg fill="#fff" viewBox="0 0 512 512" class="img-note vetinh-3">
                                        <path
                                            d="M470.38 1.51L150.41 96A32 32 0 0 0 128 126.51v261.41A139 139 0 0 0 96 384c-53 0-96 28.66-96 64s43 64 96 64 96-28.66 96-64V214.32l256-75v184.61a138.4 138.4 0 0 0-32-3.93c-53 0-96 28.66-96 64s43 64 96 64 96-28.65 96-64V32a32 32 0 0 0-41.62-30.49z"
                                        ></path>
                                    </svg>
                                    <svg fill="#fff" viewBox="0 0 384 512" class="img-note vetinh-4">
                                        <path d="M310.94 1.33l-96.53 28.51A32 32 0 0 0 192 60.34V360a148.76 148.76 0 0 0-48-8c-61.86 0-112 35.82-112 80s50.14 80 112 80 112-35.82 112-80V148.15l73-21.39a32 32 0 0 0 23-30.71V32a32 32 0 0 0-41.06-30.67z"></path>
                                    </svg> 
                                </div> -->
            </div>

            <div class="music-control__left-content">
              <span class="music-control__left-content-song js__main-color">Cưới luôn được không</span>
              <span class="music-control__left-content-singer js__sub-color">Út nhị Cover</span>
            </div>
            <div class="music-control__left-action tablet-hiden mobile-hiden">
              <!-- music-control__left-action-tym-box-active -->
              <div class="music-control__left-action-tym-box">
                <i class="fas fa-heart music-control__left-action-tym"></i>
                <i class="far fa-heart music-control__left-action-tym-non"></i>
              </div>
              <i class="fas fa-ellipsis-h music-control__left-action-option js__main-color js__toast"></i>
            </div>
          </div>
        </div>
        <div class="col l-6 m-7 s-4 rs__main-music-control-flex-1">
          <div class="music-control__center">
            <div class="music-control__center-action music-control__icon">
              <!-- music-control__icon-random--active -->
              <i class="fas fa-random music-control__icon1 js__music-control__icon1 js__main-color mobile-hiden"></i>
              <i class="fas fa-caret-left music-control__icon2 js__music-control__icon2 js__main-color"></i>
              <!-- music-control__icon-play--active -->
              <div class="music-control__icon-play js__music-control__icon-play">
                <i class="fas fa-play music-control__icon3 js__main-color js__border"></i>
                <i class="fas fa-pause music-control__icon33 js__main-color js__border"></i>
              </div>
              <i class="fas fa-caret-right music-control__icon4 js__music-control__icon4 js__main-color"></i>
              <!-- music-control__icon-repeat--active -->
              <i class="fas fa-redo music-control__icon5 js__music-control__icon5 mobile-hiden js__main-color"></i>
            </div>
            <div class="music-control__progress mobile-hiden">
              <span class="music-control__progress-time-start js__music-control__progress-time-start js__main-color">00:00</span>
              <input id="progress" class="music-control__progress-input" type="range" value="0" step="1" min="0" max="100" />
              <!-- <div class="music-control__progress-update">
                                    <div class="music-control__progress-update-timeline"></div>
                                </div> -->
              <span class="music-control__progress-time-duration js__music-control__progress-time-duration js__main-color">00:00</span>
            </div>
            <audio id="audio" src="./assets/music/list-song/0.mp3"></audio>
          </div>
        </div>
        <div class="col l-3 m-2 s-0">
          <div class="music-control__right">
            <i class="music-control__right-icon2 ipad-air-hiden js__main-color  fas fa-download" id = "download"></i>
            <i class="music-control__right-icon1 ipad-air-hiden js__main-color js__toast fas fa-photo-video"></i>
            <i class="music-control__right-icon2 ipad-air-hiden js__main-color js__toast fas fa-microphone"></i>
            <i class="music-control__right-icon3 ipad-air-hiden js__main-color js__toast far fa-square"></i>
            <!-- music-control__right--active -->
            <div class="music-control__right-volume-icon">
              <i class="music-control__right-icon4 js__main-color fas fa-volume-down"></i>
              <i class="music-control__right-icon5 js__main-color fas fa-volume-mute"></i>
            </div>
            <div class="music-control__volume-progress">
              <input id="progress1" class="music-control__volume-input" type="range" value="100" step="1" min="0" max="100" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END MUSIC CONTROL -->
  </div>

  <!-- BEGIN PLAYER ON MOBILE -->
  <!-- active -->
  <div class="mobile-player">
    <div class="mobile-player__headding">
      <img src="./assets/img/icon-home/small-logo.svg" alt="icon-home" class="mobile-player__headding-img" />
      <div class="mobile-player__headding-option">
        <span class="mobile-player__headding-option-item">ĐANG PHÁT</span>
        <span class="mobile-player__headding-option-item">LYRIC</span>
      </div>
      <div class="mobile-player__headding-close">
        <i class="fas fa-times"></i>
      </div>
    </div>
    <div class="mobile-player__body">
      <div class="mobile-player__body-thumb" style="background-image: url(./assets/img/songs/0.webp)"></div>
      <div class="mobile-player__body-now">
        <span class="mobile-player__body-now-name">Tình Yêu Ngủ Quên</span>
        <span class="mobile-player__body-now-singer">Hoàng Tôn, LyHan, Orinn Remix</span>
        <span class="mobile-player__body-now-extra">Remix Version</span>
      </div>
    </div>
    <div class="mobile-player__ctrl">
      <div class="music-control__center-action music-control__icon">
        <!-- music-control__icon-random--active -->
        <i class="fas fa-random music-control__icon1 mobile-player__ctrl-icon js__mobile-player__ctrl-icon1"></i>
        <i class="fas fa-caret-left music-control__icon2 mobile-player__ctrl-icon js__mobile-player__ctrl-icon2"></i>
        <!-- music-control__icon-play--active -->
        <div class="music-control__icon-play mobile-player__ctrl-icon js__mobile-player__ctrl-icon">
          <i class="fas fa-play music-control__icon3"></i>
          <i class="fas fa-pause music-control__icon33"></i>
        </div>
        <i class="fas fa-caret-right music-control__icon4 mobile-player__ctrl-icon js__mobile-player__ctrl-icon4"></i>
        <!-- music-control__icon-repeat--active -->
        <i class="fas fa-redo music-control__icon5 mobile-player__ctrl-icon js__mobile-player__ctrl-icon5"></i>
      </div>
      <div class="music-control__progress mobile-player__ctrl-progress">
        <span class="music-control__progress-time-start mobile-player__ctrl-progress-time-start">00:00</span>
        <input id="progress2" class="music-control__progress-input mobile-player__ctrl-progress-input" type="range" value="0" step="1" min="0" max="100" />
        <span class="music-control__progress-time-duration mobile-player__ctrl-progress-time-duration">00:00</span>
      </div>
    </div>
  </div>

  <!-- END PLAYER ON MOBILE -->
  </div>

  <div id="toast">
    <!-- <div class="toast__item">
            <i class="fa-solid fa-circle-exclamation"></i>
            <span>Chức năng này đang phát triển, bạn vui lòng thử lại sau !</span>
        </div> -->
  </div>


</body>
<script src="./assets/javascript/main.js"></script>
<script src="./assets/javascript/login.js"></script>

</html>