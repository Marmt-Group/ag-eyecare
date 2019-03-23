// YouTube Player

// Loads the YouTube IFrame API JavaScript code.
var tag = document.createElement('script');
tag.src = 'https://www.youtube.com/iframe_api';
// Inserts YouTube JS code into the page.
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var videoID = $('.tv').data('video-id');
var videoStart = $('.tv').data('video-start');
var videoEnd = $('.tv').data('video-end');
var videoWidthAdd = $('.tv').data('video-width-add');
var videoHeightAdd = $('.tv').data('video-height-add');

var tv;

var playerDefaults = {
  autoplay: 0,
  autohide: 1,
  modestbranding: 1,
  rel: 0,
  showinfo: 0,
  controls: 0,
  disablekb: 1,
  enablejsapi: 0,
  iv_load_policy: 3,
};

var vid = {
  videoId: videoID,
  startSeconds: videoStart,
  endSeconds: videoEnd,
  suggestedQuality: 'hd720',
};

function onYouTubePlayerAPIReady() {
  tv = new YT.Player('tv', {
    events: { onReady: onPlayerReady, onStateChange: onPlayerStateChange },
    playerVars: playerDefaults,
  });
}

function onPlayerReady() {
  tv.loadVideoById(vid);
  tv.mute();
}

function onPlayerStateChange(e) {
  if (e.data === 1) {
    $('#tv').addClass('active');
  } else if (e.data === 0) {
    tv.seekTo(vid.startSeconds);
  }
}

// function vidRescale() {
//   var w = $(window).width() + videoWidthAdd,
//     h = $(window).height() + videoHeightAdd;
//   if (w / h > 16 / 9) {
//     console.log('if: w / h > 16 / 9');
//     console.log(w, (w / 16) * 9);
//     tv.setSize(w, (w / 16) * 9);
//     // $('.tv .screen').css({ left: '0px' });
//   } else {
//     console.log('else');
//     console.log((h / 9) * 16, h);
//     tv.setSize((h / 9) * 16, h);
//     // $('.tv .screen').css({ left: -($('.tv .screen').outerWidth() - w) / 2 });
//   }
// }

// $(window).on('load resize', function() {
//   vidRescale();
// });

// Instagram Feed

var token = '312076064.1677ed0.666b99aa3cd346d4916619e63ac862f0',
  num_photos = 9, // maximum 20
  container = document.getElementById('instafeed'), // it is our <ul id="rudr_instafeed">
  scrElement = document.createElement('script');

window.instafeedProcessResult = function(data) {
  for (x in data.data) {
    container.innerHTML +=
      `<div class="instafeed-item-container"><div class="instafeed-item" style="background-image: url(${data.data[x].images.standard_resolution.url});"></div></div>`;
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

(function($) {
  $(document).ready(function() {
    // do something
  });
})(jQuery);
