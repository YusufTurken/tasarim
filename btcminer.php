<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
  include 'ayarlar/cart_db.php';
?>

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
  }

  .b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
  }

  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }

  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }
</style>




<div class="container">




<div class="pricing-header pb-md-4 mx-auto text-center mb-5">
  <h1 class="display-4 fw-normal"><p style="font-size: 50px; margin-left: 5%;"><strong>
            <?xml?><svg width="70px" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 122.88 120" style="enable-background:new 0 0 122.88 97.41" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M10.06,0h11.17v18.95h93.71c2.18,0,3.75,0.89,5.19,2.33c1.44,1.44,2.75,3.43,2.75,5.61v49.43 c0,2.18-0.89,4.17-2.33,5.61c-1.43,1.43-3.43,2.33-5.61,2.33h-2.83v6.14c0,0.74-0.31,1.42-0.8,1.92l-0.01,0.01 c-0.5,0.49-1.18,0.8-1.92,0.8h-47.1c-0.75,0-1.43-0.31-1.93-0.8c-0.05-0.05-0.1-0.11-0.14-0.16c-0.41-0.48-0.66-1.1-0.66-1.77 v-6.14H52.9v6.14c0,0.75-0.31,1.43-0.8,1.93c-0.05,0.05-0.11,0.1-0.16,0.14c-0.48,0.41-1.1,0.66-1.77,0.66H27.97 c-0.75,0-1.43-0.31-1.93-0.8c-0.05-0.05-0.1-0.11-0.14-0.16c-0.41-0.48-0.66-1.1-0.66-1.77v-6.14h-4.01v13.15H10.06V75.47H6.4 c-0.33,0-0.6-0.27-0.6-0.6v-16.9c0-0.33,0.27-0.6,0.6-0.6h3.65V42.03H6.4c-0.33,0-0.6-0.27-0.6-0.6v-16.9c0-0.33,0.27-0.6,0.6-0.6 h3.65V8.9H4.45C2.01,8.9,0,6.9,0,4.45v0C0,2,2,0,4.45,0H10.06L10.06,0z M37.29,69.04h3.13v-3.8h-3.13V69.04L37.29,69.04 L37.29,69.04z M91.95,30.2c5.91,0,11.26,2.4,15.13,6.27c3.87,3.87,6.27,9.22,6.27,15.13c0,5.91-2.4,11.26-6.27,15.13 c-3.87,3.87-9.22,6.27-15.13,6.27c-5.91,0-11.26-2.4-15.13-6.27c-3.87-3.87-6.27-9.22-6.27-15.13c0-5.91,2.4-11.26,6.27-15.13 C80.69,32.6,86.04,30.2,91.95,30.2L91.95,30.2z M105.29,38.27c-3.41-3.41-8.13-5.52-13.34-5.52c-5.21,0-9.92,2.11-13.34,5.52 c-3.41,3.41-5.52,8.13-5.52,13.34s2.11,9.92,5.52,13.34c3.41,3.41,8.13,5.52,13.34,5.52c5.21,0,9.92-2.11,13.34-5.52 c3.41-3.41,5.52-8.13,5.52-13.34S108.7,41.68,105.29,38.27L105.29,38.27z M98.16,53.78c-0.3,0.73-0.73,1.39-1.31,1.98 c-0.61,0.63-1.38,1.17-2.31,1.63c-0.01,0.25-0.02,0.48-0.04,0.71c-0.03,0.4-0.08,0.81-0.15,1.23c-0.27,1.68-0.84,2.92-1.41,4.15 c-0.37,0.8-0.74,1.6-1,2.48c-0.09,0.32-0.12,0.6-0.11,0.86c0.03,0.44,0.21,0.79,0.5,1.07c0.32,0.32,0.78,0.55,1.28,0.7 c0.56,0.16,1.18,0.23,1.78,0.19c0.52-0.03,1.07-0.14,1.6-0.28c0.55-0.15,1.08-0.34,1.59-0.55c0.47-0.19,0.91-0.41,1.33-0.66 c0.43-0.25,0.85-0.52,1.25-0.82c1.35-0.99,2.3-2.07,2.86-3.15c0.52-0.99,0.71-2.01,0.61-3c-0.1-1-0.5-1.98-1.19-2.92 c-0.88-1.2-2.22-2.29-3.98-3.21c-0.29-0.15-0.6-0.26-0.91-0.32C98.42,53.81,98.29,53.79,98.16,53.78L98.16,53.78L98.16,53.78z M94.12,46.08c0.74,0.27,1.42,0.67,2.03,1.23c0.66,0.59,1.23,1.33,1.73,2.24c0.23,0,0.47,0,0.71,0.01 c0.43,0.02,0.84,0.05,1.24,0.09c1.68,0.19,2.95,0.71,4.21,1.23c0.81,0.33,1.61,0.66,2.53,0.88c0.01,0,0.02,0,0.03,0.01 c0.31,0.07,0.58,0.09,0.83,0.06c0.44-0.05,0.78-0.25,1.05-0.55c0.3-0.34,0.51-0.8,0.64-1.32c0.14-0.57,0.17-1.19,0.11-1.78 c-0.06-0.53-0.18-1.06-0.35-1.59c-0.18-0.54-0.39-1.07-0.62-1.57c-0.21-0.45-0.46-0.89-0.72-1.3c-0.26-0.41-0.56-0.81-0.88-1.21 c-1.05-1.31-2.16-2.2-3.28-2.72c-1.02-0.47-2.04-0.62-3.03-0.48c-0.99,0.15-1.96,0.59-2.86,1.31c-1.16,0.93-2.19,2.32-3.03,4.12 c-0.14,0.3-0.23,0.61-0.28,0.93C94.15,45.81,94.13,45.94,94.12,46.08L94.12,46.08L94.12,46.08z M86.42,49.56 c0.26-0.74,0.67-1.42,1.22-2.04c0.58-0.65,1.33-1.23,2.24-1.73c0-0.24,0-0.47,0.01-0.71c0.01-0.42,0.04-0.84,0.09-1.24 c0.19-1.69,0.7-2.95,1.22-4.21c0.33-0.82,0.67-1.64,0.88-2.53c0.08-0.32,0.1-0.61,0.07-0.86c-0.05-0.43-0.25-0.78-0.55-1.05 c-0.34-0.3-0.8-0.51-1.32-0.64c-0.57-0.14-1.19-0.17-1.78-0.1c-0.53,0.06-1.07,0.18-1.59,0.35c-0.53,0.17-1.06,0.39-1.56,0.63 c-0.45,0.21-0.88,0.46-1.3,0.73c-0.42,0.27-0.82,0.56-1.2,0.87c-1.31,1.06-2.2,2.17-2.71,3.29c-0.47,1.02-0.62,2.04-0.47,3.02 c0.15,0.99,0.59,1.96,1.32,2.86c0.93,1.15,2.33,2.19,4.13,3.02c0.3,0.14,0.61,0.23,0.93,0.28C86.16,49.54,86.29,49.55,86.42,49.56 L86.42,49.56L86.42,49.56z M95.55,48.37C94.7,47.53,93.53,47,92.24,47c-1.29,0-2.47,0.53-3.31,1.37c-0.85,0.85-1.37,2.02-1.37,3.31 c0,1.29,0.53,2.47,1.37,3.31c0.85,0.85,2.02,1.37,3.31,1.37c1.29,0,2.47-0.53,3.31-1.37c0.85-0.85,1.37-2.02,1.37-3.31 C96.93,50.4,96.4,49.22,95.55,48.37L95.55,48.37L95.55,48.37z M89.83,57.11c-0.74-0.26-1.43-0.65-2.05-1.19 c-0.67-0.58-1.25-1.31-1.77-2.21c-0.23,0-0.47,0-0.71,0c-0.41-0.01-0.83-0.03-1.23-0.07c-1.69-0.17-2.97-0.66-4.23-1.16 c-0.82-0.32-1.64-0.64-2.54-0.85c-0.32-0.07-0.61-0.09-0.86-0.06c-0.44,0.06-0.78,0.26-1.04,0.56c-0.29,0.34-0.5,0.81-0.62,1.32 c-0.13,0.57-0.15,1.19-0.08,1.78c0.07,0.53,0.2,1.06,0.38,1.58c0.18,0.55,0.41,1.07,0.65,1.55c0.22,0.44,0.47,0.87,0.74,1.29 c0.28,0.42,0.58,0.82,0.89,1.2c1.07,1.28,2.2,2.16,3.33,2.66c1.03,0.46,2.05,0.59,3.03,0.44c0.99-0.16,1.95-0.62,2.84-1.36 c1.14-0.95,2.15-2.35,2.96-4.17c0.14-0.3,0.22-0.62,0.26-0.93C89.81,57.37,89.82,57.24,89.83,57.11L89.83,57.11L89.83,57.11z M35.58,39.71h21.21c0.73,0,1.32,0.59,1.32,1.32v21.28c0,0.73-0.6,1.32-1.32,1.32H35.58c-0.73,0-1.32-0.6-1.32-1.32V41.03 C34.26,40.3,34.85,39.71,35.58,39.71L35.58,39.71L35.58,39.71L35.58,39.71z M41.17,45.89H51.2c0.44,0,0.8,0.36,0.8,0.8v9.97 c0,0.44-0.36,0.8-0.8,0.8H41.17c-0.44,0-0.8-0.36-0.8-0.8v-9.97C40.37,46.25,40.73,45.89,41.17,45.89L41.17,45.89L41.17,45.89z M64.02,52.79v2.6h-3.8v-2.6H64.02L64.02,52.79L64.02,52.79z M64.02,47.82v2.6h-3.8v-2.6H64.02L64.02,47.82L64.02,47.82 L64.02,47.82z M64.02,57.77v3.13h-3.8v-3.13H64.02L64.02,57.77L64.02,57.77z M64.02,42.32v3.13h-3.8v-3.13H64.02L64.02,42.32 L64.02,42.32z M29.15,52.79v2.6h3.8v-2.6H29.15L29.15,52.79L29.15,52.79z M29.15,47.82v2.6h3.8v-2.6H29.15L29.15,47.82L29.15,47.82 z M29.15,57.77v3.13h3.8v-3.13H29.15L29.15,57.77L29.15,57.77z M29.15,42.32v3.13h3.8v-3.13H29.15L29.15,42.32L29.15,42.32z M47.77,34.17h2.6v3.8h-2.6V34.17L47.77,34.17L47.77,34.17L47.77,34.17z M42.8,34.17h2.6v3.8h-2.6V34.17L42.8,34.17L42.8,34.17 L42.8,34.17z M52.74,34.17h3.13v3.8h-3.13V34.17L52.74,34.17L52.74,34.17L52.74,34.17z M37.29,34.17h3.13v3.8h-3.13V34.17 L37.29,34.17L37.29,34.17L37.29,34.17z M47.77,69.04h2.6v-3.8h-2.6V69.04L47.77,69.04L47.77,69.04z M42.8,69.04h2.6v-3.8h-2.6 V69.04L42.8,69.04L42.8,69.04z M52.74,69.04h3.13v-3.8h-3.13V69.04L52.74,69.04L52.74,69.04z M21.23,24.3v54.88h91.63 c1.4,0,2.67-0.57,3.59-1.5c0.92-0.93,1.5-2.2,1.5-3.59V29.39c0-1.4-0.57-2.67-1.5-3.59c-0.91-0.92-2.19-1.5-3.58-1.5l0,0H21.23 L21.23,24.3z M108.64,84.26h-6.43c0.1,0.22,0.16,0.46,0.16,0.72v4.68h6.27V84.26L108.64,84.26z M99.05,84.26h-7.32 c0.1,0.22,0.16,0.46,0.16,0.72v4.68h7.01v-4.68C98.9,84.73,98.95,84.48,99.05,84.26L99.05,84.26z M88.57,84.26h-7.33 c0.1,0.22,0.16,0.46,0.16,0.72v4.68h7.01v-4.68C88.41,84.73,88.47,84.48,88.57,84.26L88.57,84.26z M78.09,84.26h-7.32 c0.1,0.22,0.16,0.46,0.16,0.72v4.68h7.01v-4.68C77.93,84.73,77.99,84.48,78.09,84.26L78.09,84.26z M67.61,84.26h-4.59v5.4h4.43 v-4.68C67.45,84.73,67.51,84.48,67.61,84.26L67.61,84.26z M49.43,84.26h-4.38c0.1,0.22,0.16,0.46,0.16,0.72v4.68h4.22V84.26 L49.43,84.26z M41.9,84.26h-6.28c0.1,0.22,0.16,0.46,0.16,0.72v4.68h5.97v-4.68C41.74,84.73,41.8,84.48,41.9,84.26L41.9,84.26z M32.46,84.26H28.7v5.4h3.6v-4.68C32.3,84.73,32.36,84.48,32.46,84.26L32.46,84.26z"/></g></svg>

            BTC Mining
          
            <?xml?><svg width="70px" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 122.88 120" style="enable-background:new 0 0 122.88 97.41" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M10.06,0h11.17v18.95h93.71c2.18,0,3.75,0.89,5.19,2.33c1.44,1.44,2.75,3.43,2.75,5.61v49.43 c0,2.18-0.89,4.17-2.33,5.61c-1.43,1.43-3.43,2.33-5.61,2.33h-2.83v6.14c0,0.74-0.31,1.42-0.8,1.92l-0.01,0.01 c-0.5,0.49-1.18,0.8-1.92,0.8h-47.1c-0.75,0-1.43-0.31-1.93-0.8c-0.05-0.05-0.1-0.11-0.14-0.16c-0.41-0.48-0.66-1.1-0.66-1.77 v-6.14H52.9v6.14c0,0.75-0.31,1.43-0.8,1.93c-0.05,0.05-0.11,0.1-0.16,0.14c-0.48,0.41-1.1,0.66-1.77,0.66H27.97 c-0.75,0-1.43-0.31-1.93-0.8c-0.05-0.05-0.1-0.11-0.14-0.16c-0.41-0.48-0.66-1.1-0.66-1.77v-6.14h-4.01v13.15H10.06V75.47H6.4 c-0.33,0-0.6-0.27-0.6-0.6v-16.9c0-0.33,0.27-0.6,0.6-0.6h3.65V42.03H6.4c-0.33,0-0.6-0.27-0.6-0.6v-16.9c0-0.33,0.27-0.6,0.6-0.6 h3.65V8.9H4.45C2.01,8.9,0,6.9,0,4.45v0C0,2,2,0,4.45,0H10.06L10.06,0z M37.29,69.04h3.13v-3.8h-3.13V69.04L37.29,69.04 L37.29,69.04z M91.95,30.2c5.91,0,11.26,2.4,15.13,6.27c3.87,3.87,6.27,9.22,6.27,15.13c0,5.91-2.4,11.26-6.27,15.13 c-3.87,3.87-9.22,6.27-15.13,6.27c-5.91,0-11.26-2.4-15.13-6.27c-3.87-3.87-6.27-9.22-6.27-15.13c0-5.91,2.4-11.26,6.27-15.13 C80.69,32.6,86.04,30.2,91.95,30.2L91.95,30.2z M105.29,38.27c-3.41-3.41-8.13-5.52-13.34-5.52c-5.21,0-9.92,2.11-13.34,5.52 c-3.41,3.41-5.52,8.13-5.52,13.34s2.11,9.92,5.52,13.34c3.41,3.41,8.13,5.52,13.34,5.52c5.21,0,9.92-2.11,13.34-5.52 c3.41-3.41,5.52-8.13,5.52-13.34S108.7,41.68,105.29,38.27L105.29,38.27z M98.16,53.78c-0.3,0.73-0.73,1.39-1.31,1.98 c-0.61,0.63-1.38,1.17-2.31,1.63c-0.01,0.25-0.02,0.48-0.04,0.71c-0.03,0.4-0.08,0.81-0.15,1.23c-0.27,1.68-0.84,2.92-1.41,4.15 c-0.37,0.8-0.74,1.6-1,2.48c-0.09,0.32-0.12,0.6-0.11,0.86c0.03,0.44,0.21,0.79,0.5,1.07c0.32,0.32,0.78,0.55,1.28,0.7 c0.56,0.16,1.18,0.23,1.78,0.19c0.52-0.03,1.07-0.14,1.6-0.28c0.55-0.15,1.08-0.34,1.59-0.55c0.47-0.19,0.91-0.41,1.33-0.66 c0.43-0.25,0.85-0.52,1.25-0.82c1.35-0.99,2.3-2.07,2.86-3.15c0.52-0.99,0.71-2.01,0.61-3c-0.1-1-0.5-1.98-1.19-2.92 c-0.88-1.2-2.22-2.29-3.98-3.21c-0.29-0.15-0.6-0.26-0.91-0.32C98.42,53.81,98.29,53.79,98.16,53.78L98.16,53.78L98.16,53.78z M94.12,46.08c0.74,0.27,1.42,0.67,2.03,1.23c0.66,0.59,1.23,1.33,1.73,2.24c0.23,0,0.47,0,0.71,0.01 c0.43,0.02,0.84,0.05,1.24,0.09c1.68,0.19,2.95,0.71,4.21,1.23c0.81,0.33,1.61,0.66,2.53,0.88c0.01,0,0.02,0,0.03,0.01 c0.31,0.07,0.58,0.09,0.83,0.06c0.44-0.05,0.78-0.25,1.05-0.55c0.3-0.34,0.51-0.8,0.64-1.32c0.14-0.57,0.17-1.19,0.11-1.78 c-0.06-0.53-0.18-1.06-0.35-1.59c-0.18-0.54-0.39-1.07-0.62-1.57c-0.21-0.45-0.46-0.89-0.72-1.3c-0.26-0.41-0.56-0.81-0.88-1.21 c-1.05-1.31-2.16-2.2-3.28-2.72c-1.02-0.47-2.04-0.62-3.03-0.48c-0.99,0.15-1.96,0.59-2.86,1.31c-1.16,0.93-2.19,2.32-3.03,4.12 c-0.14,0.3-0.23,0.61-0.28,0.93C94.15,45.81,94.13,45.94,94.12,46.08L94.12,46.08L94.12,46.08z M86.42,49.56 c0.26-0.74,0.67-1.42,1.22-2.04c0.58-0.65,1.33-1.23,2.24-1.73c0-0.24,0-0.47,0.01-0.71c0.01-0.42,0.04-0.84,0.09-1.24 c0.19-1.69,0.7-2.95,1.22-4.21c0.33-0.82,0.67-1.64,0.88-2.53c0.08-0.32,0.1-0.61,0.07-0.86c-0.05-0.43-0.25-0.78-0.55-1.05 c-0.34-0.3-0.8-0.51-1.32-0.64c-0.57-0.14-1.19-0.17-1.78-0.1c-0.53,0.06-1.07,0.18-1.59,0.35c-0.53,0.17-1.06,0.39-1.56,0.63 c-0.45,0.21-0.88,0.46-1.3,0.73c-0.42,0.27-0.82,0.56-1.2,0.87c-1.31,1.06-2.2,2.17-2.71,3.29c-0.47,1.02-0.62,2.04-0.47,3.02 c0.15,0.99,0.59,1.96,1.32,2.86c0.93,1.15,2.33,2.19,4.13,3.02c0.3,0.14,0.61,0.23,0.93,0.28C86.16,49.54,86.29,49.55,86.42,49.56 L86.42,49.56L86.42,49.56z M95.55,48.37C94.7,47.53,93.53,47,92.24,47c-1.29,0-2.47,0.53-3.31,1.37c-0.85,0.85-1.37,2.02-1.37,3.31 c0,1.29,0.53,2.47,1.37,3.31c0.85,0.85,2.02,1.37,3.31,1.37c1.29,0,2.47-0.53,3.31-1.37c0.85-0.85,1.37-2.02,1.37-3.31 C96.93,50.4,96.4,49.22,95.55,48.37L95.55,48.37L95.55,48.37z M89.83,57.11c-0.74-0.26-1.43-0.65-2.05-1.19 c-0.67-0.58-1.25-1.31-1.77-2.21c-0.23,0-0.47,0-0.71,0c-0.41-0.01-0.83-0.03-1.23-0.07c-1.69-0.17-2.97-0.66-4.23-1.16 c-0.82-0.32-1.64-0.64-2.54-0.85c-0.32-0.07-0.61-0.09-0.86-0.06c-0.44,0.06-0.78,0.26-1.04,0.56c-0.29,0.34-0.5,0.81-0.62,1.32 c-0.13,0.57-0.15,1.19-0.08,1.78c0.07,0.53,0.2,1.06,0.38,1.58c0.18,0.55,0.41,1.07,0.65,1.55c0.22,0.44,0.47,0.87,0.74,1.29 c0.28,0.42,0.58,0.82,0.89,1.2c1.07,1.28,2.2,2.16,3.33,2.66c1.03,0.46,2.05,0.59,3.03,0.44c0.99-0.16,1.95-0.62,2.84-1.36 c1.14-0.95,2.15-2.35,2.96-4.17c0.14-0.3,0.22-0.62,0.26-0.93C89.81,57.37,89.82,57.24,89.83,57.11L89.83,57.11L89.83,57.11z M35.58,39.71h21.21c0.73,0,1.32,0.59,1.32,1.32v21.28c0,0.73-0.6,1.32-1.32,1.32H35.58c-0.73,0-1.32-0.6-1.32-1.32V41.03 C34.26,40.3,34.85,39.71,35.58,39.71L35.58,39.71L35.58,39.71L35.58,39.71z M41.17,45.89H51.2c0.44,0,0.8,0.36,0.8,0.8v9.97 c0,0.44-0.36,0.8-0.8,0.8H41.17c-0.44,0-0.8-0.36-0.8-0.8v-9.97C40.37,46.25,40.73,45.89,41.17,45.89L41.17,45.89L41.17,45.89z M64.02,52.79v2.6h-3.8v-2.6H64.02L64.02,52.79L64.02,52.79z M64.02,47.82v2.6h-3.8v-2.6H64.02L64.02,47.82L64.02,47.82 L64.02,47.82z M64.02,57.77v3.13h-3.8v-3.13H64.02L64.02,57.77L64.02,57.77z M64.02,42.32v3.13h-3.8v-3.13H64.02L64.02,42.32 L64.02,42.32z M29.15,52.79v2.6h3.8v-2.6H29.15L29.15,52.79L29.15,52.79z M29.15,47.82v2.6h3.8v-2.6H29.15L29.15,47.82L29.15,47.82 z M29.15,57.77v3.13h3.8v-3.13H29.15L29.15,57.77L29.15,57.77z M29.15,42.32v3.13h3.8v-3.13H29.15L29.15,42.32L29.15,42.32z M47.77,34.17h2.6v3.8h-2.6V34.17L47.77,34.17L47.77,34.17L47.77,34.17z M42.8,34.17h2.6v3.8h-2.6V34.17L42.8,34.17L42.8,34.17 L42.8,34.17z M52.74,34.17h3.13v3.8h-3.13V34.17L52.74,34.17L52.74,34.17L52.74,34.17z M37.29,34.17h3.13v3.8h-3.13V34.17 L37.29,34.17L37.29,34.17L37.29,34.17z M47.77,69.04h2.6v-3.8h-2.6V69.04L47.77,69.04L47.77,69.04z M42.8,69.04h2.6v-3.8h-2.6 V69.04L42.8,69.04L42.8,69.04z M52.74,69.04h3.13v-3.8h-3.13V69.04L52.74,69.04L52.74,69.04z M21.23,24.3v54.88h91.63 c1.4,0,2.67-0.57,3.59-1.5c0.92-0.93,1.5-2.2,1.5-3.59V29.39c0-1.4-0.57-2.67-1.5-3.59c-0.91-0.92-2.19-1.5-3.58-1.5l0,0H21.23 L21.23,24.3z M108.64,84.26h-6.43c0.1,0.22,0.16,0.46,0.16,0.72v4.68h6.27V84.26L108.64,84.26z M99.05,84.26h-7.32 c0.1,0.22,0.16,0.46,0.16,0.72v4.68h7.01v-4.68C98.9,84.73,98.95,84.48,99.05,84.26L99.05,84.26z M88.57,84.26h-7.33 c0.1,0.22,0.16,0.46,0.16,0.72v4.68h7.01v-4.68C88.41,84.73,88.47,84.48,88.57,84.26L88.57,84.26z M78.09,84.26h-7.32 c0.1,0.22,0.16,0.46,0.16,0.72v4.68h7.01v-4.68C77.93,84.73,77.99,84.48,78.09,84.26L78.09,84.26z M67.61,84.26h-4.59v5.4h4.43 v-4.68C67.45,84.73,67.51,84.48,67.61,84.26L67.61,84.26z M49.43,84.26h-4.38c0.1,0.22,0.16,0.46,0.16,0.72v4.68h4.22V84.26 L49.43,84.26z M41.9,84.26h-6.28c0.1,0.22,0.16,0.46,0.16,0.72v4.68h5.97v-4.68C41.74,84.73,41.8,84.48,41.9,84.26L41.9,84.26z M32.46,84.26H28.7v5.4h3.6v-4.68C32.3,84.73,32.36,84.48,32.46,84.26L32.46,84.26z"/></g></svg>
          </strong></p></h1>

          <hr>
  <div>
        <div class="row">
          <div class="col-md-6">
            
            <p class="mt-4" style="font-size: 25px; text-align: center; margin-left: 2%;">
              <b>Bitcoin Mining</b> son senelerin en gözde mesleği
              <br><br>Herkes oturduğu yerden para kazanmak ister bu doğrultuda <b>Bitcoin Mining</b> tam size göre
              <br><br>Yeni Bitcoin Minerlarla en yüksek kazma hızlarına ulaşıyoruz!
              <br><br>Sizde bizimle beraber kazanmak isterseniz aşağıdaki paketlerimizi inceleyin!

          </div>
          <div class="col-md-6">
            <img style="padding: 10px;" width="1000px" src="images/mining.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
</div>
</header>

<hr>
<main>

<h1 class="text-center mt-4 mb-4"><b><u>Paketler</u></b></h1>
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

<?php
      $select_miner_extreme = mysqli_query($conn, "SELECT * FROM `products` WHERE id = 1") or die('query failed');
      if(mysqli_num_rows($select_miner_extreme) > 0){
        while($fetch_miner_extreme = mysqli_fetch_assoc($select_miner_extreme)){
    ?>
<form method="post" action="">

  <div class="col">
    <div class="card mb-4 rounded-3">
      <div style="background-color: black!important;"  class="card-header py-3">
        <h4 style="color: white!important;"  class="my-0 fw-normal">Başlangıç Miner</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$125<small class="text-muted fw-light">/sene</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <?= $fetch_miner_extreme['detail']; ?>
        </ul>
        <input type="submit" name="add_to_cart" value="Sepet Ekle!" class="w-100 btn btn-lg btn-warning"></input>
      </div>
    </div>
  </div>

  <input type="hidden" name="product_id" value="<?= $fetch_miner_extreme['id']; ?>"></input>
</form>
  <?php
        }}
  ?>

  <?php
      $select_miner_extreme = mysqli_query($conn, "SELECT * FROM `products` WHERE id = 2") or die('query failed');
      if(mysqli_num_rows($select_miner_extreme) > 0){
        while($fetch_miner_extreme = mysqli_fetch_assoc($select_miner_extreme)){
    ?>
<form method="post" action="">

  <div class="col">
    <div class="card mb-4 rounded-3 shadow">
      <div style="background-color: black!important;"  class="card-header py-3">
        <h4 style="color: white!important;" class="my-0 fw-normal">Temel Miner</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$<?= $fetch_miner_extreme['price']; ?><small class="text-muted fw-light">/sene</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <?= $fetch_miner_extreme['detail']; ?>
        </ul>
        <input type="submit" name="add_to_cart" value="Sepete Ekle!" class="w-100 btn btn-lg btn-warning"></input>
      </div>
    </div>
  </div>
    <input type="hidden" name="product_id" value="<?= $fetch_miner_extreme['id']; ?>"></input>
</form>
  <?php
        }}
  ?>

  <?php
      $select_miner_extreme = mysqli_query($conn, "SELECT * FROM `products` WHERE id = 3") or die('query failed');
      if(mysqli_num_rows($select_miner_extreme) > 0){
        while($fetch_miner_extreme = mysqli_fetch_assoc($select_miner_extreme)){
    ?>
<form method="post" action="">

  <div class="col">
    <div class="card mb-4 rounded-3 shadow-lg border-primary">
      <div style="background-color: black!important;" class="card-header py-3 text-bg-primary border-primary">
        <h4 class="my-0 fw-normal">Acemi Miner</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$<?= $fetch_miner_extreme['price']; ?><small class="text-muted fw-light">/sene</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <?= $fetch_miner_extreme['detail']; ?>
        </ul>
        <input type="submit" name="add_to_cart" value="Sepete Ekle!" class="w-100 btn btn-lg btn-warning"></input>
      </div>
    </div>
  </div>
</div>
  <input type="hidden" name="product_id" value="<?= $fetch_miner_extreme['id']; ?>"></input>
</form>
  <?php
        }}
  ?>


<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

<?php
      $select_miner_extreme = mysqli_query($conn, "SELECT * FROM `products` WHERE id = 4") or die('query failed');
      if(mysqli_num_rows($select_miner_extreme) > 0){
        while($fetch_miner_extreme = mysqli_fetch_assoc($select_miner_extreme)){
    ?>
<form method="post" action="">    
  <div class="col">
    <div class="card mb-4 rounded-3">
      <div style="background-color: black!important;" class="card-header py-3">
        <h4 style="color: white!important;" class="my-0 fw-normal">Usta Miner</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$<?= $fetch_miner_extreme['price']; ?><small class="text-muted fw-light">/sene</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <?= $fetch_miner_extreme['detail']; ?>
        </ul>
        <input type="submit" name="add_to_cart" value="Sepete Ekle!" class="w-100 btn btn-lg btn-warning addToCartBtn"></input>
      </div>
    </div>
  </div>
  <input type="hidden" name="product_id" value="<?= $fetch_miner_extreme['id']; ?>"></input>
</form>
  <?php
        }}
  ?>

  <?php
      $select_miner_extreme = mysqli_query($conn, "SELECT * FROM `products` WHERE id = 5") or die('query failed');
      if(mysqli_num_rows($select_miner_extreme) > 0){
        while($fetch_miner_extreme = mysqli_fetch_assoc($select_miner_extreme)){
    ?>
<form method="post" action="">
  <div class="col">
    <div class="card mb-4 rounded-3 shadow">
      <div style="background-color: #101820FF!important;" class="card-header py-3">
        <h4 style="color: white!important;" class="my-0">Profesyonel Miner</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$<?= $fetch_miner_extreme['price']; ?><small class="text-muted fw-light">/sene</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <?= $fetch_miner_extreme['detail']; ?>
        </ul>
        <input type="submit" name="add_to_cart" value="Sepete Ekle!" class="w-100 btn btn-lg btn-warning addToCartBtn"></input>
      </div>
    </div>
  </div>
  <input type="hidden" name="product_id" value="<?= $fetch_miner_extreme['id']; ?>"></input>
</form>
  <?php
        }}
  ?>

  <?php
      $select_miner_extreme = mysqli_query($conn, "SELECT * FROM `products` WHERE id = 6") or die('query failed');
      if(mysqli_num_rows($select_miner_extreme) > 0){
        while($fetch_miner_extreme = mysqli_fetch_assoc($select_miner_extreme)){
    ?>

<form method="post" action="">
  <div class="col">
    <div class="card mb-4 rounded-3 shadow border-primary">
      <div style="background-color: #101820FF!important;" class="card-header py-3 text-bg-primary border-secondary">
        <h4 class="my-0 fw-normal"><b><big>Extreme</big> </b>Miner</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$<?= $fetch_miner_extreme['price']; ?><small class="text-muted fw-light">/sene</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <?= $fetch_miner_extreme['detail']; ?>
        </ul>
        <input type="submit" name="add_to_cart" value="Sepete Ekle!" class="w-100 btn btn-lg btn-warning addToCartBtn"></input>
      </div>
    </div>
  </div>
  <input type="hidden" name="product_id" value="<?= $fetch_miner_extreme['id']; ?>"></input>
</form>
  <?php
        }}
  ?>
</div>
</main>