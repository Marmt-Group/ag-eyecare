
<?php
/**
* Template Name: Insta Feed Alt Page
*
* @package WordPress
* @subpackage AG_Eyecare
* @since 1.0.0
*/

get_header();
?>

<style>
body {
  height: 100%;
  height: 100vh;
}

.instafeed-list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
          flex-flow: row wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.instafeed-list .instafeed-item {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 24%;
          flex: 0 0 24%;
  height: 300px;
  margin-bottom: 1%;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  -webkit-box-shadow: 0px 0px 20px 1px rgba(0,0,0,0.25);
          box-shadow: 0px 0px 20px 1px rgba(0,0,0,0.25);
  border: 1px solid gray;
}
</style>

<body>

<section class="imagebg image--light gradient--bg-fade section-cta-bottom background--bottom" style="height: 100%; padding: 75px 0 400px;">
    <div class="background-image-holder">
        <img alt="image" src="<?php echo get_template_directory_uri() ?>/img/about2.jpg" />
    </div>
    <div class="container" style="width: 100%; max-width: none; padding: 0 200px;">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2 style="margin-bottom: 40px;">Avant-Garde Optometry on Instagram</h2>
          <div id="instafeed-alt" class="instafeed-list"></div>
        </div>
      </div>
    </div>
</section>

<script>
var token = '312076064.1677ed0.666b99aa3cd346d4916619e63ac862f0',
  num_photos = 8, // maximum 20 
  container = document.getElementById('instafeed-alt'), // it is our <ul id="rudr_instafeed">
  scrElement = document.createElement('script');

window.instafeedProcessResult = function(data) {
  for (x in data.data) {
    container.innerHTML +=
      '<div class="instafeed-item" style="background-image: url(' +
      data.data[x].images.standard_resolution.url +
      ');"></div>';
  }
};

scrElement.setAttribute(
  'src',
  'https://api.instagram.com/v1/users/self/media/recent?access_token=' +
    token +
    '&count=' +
    num_photos +
    '&callback=instafeedProcessResult'
);
document.body.appendChild(scrElement);
</script>

</body>
</html>

<?php wp_footer(); ?>