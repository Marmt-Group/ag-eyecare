// YouTube Player

// Loads the YouTube IFrame API JavaScript code.
var tag = document.createElement('script');
tag.src = 'https://www.youtube.com/iframe_api';
// Inserts YouTube JS code into the page.
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var videoID = jQuery('.tv').data('video-id');
var videoStart = jQuery('.tv').data('video-start');
var videoEnd = jQuery('.tv').data('video-end');
var videoWidthAdd = jQuery('.tv').data('video-width-add');
var videoHeightAdd = jQuery('.tv').data('video-height-add');

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

var onYouTubePlayerAPIReady = function() {
  tv = new YT.Player('tv', {
    events: { onReady: onPlayerReady, onStateChange: onPlayerStateChange },
    playerVars: playerDefaults,
  });
}

var onPlayerReady = function() {
  tv.loadVideoById(vid);
  tv.mute();
}

var onPlayerStateChange = function (e) {
  if (e.data === 1) {
    document.getElementById('tv').classList.add('active');
  } else if (e.data === 0) {
    tv.seekTo(vid.startSeconds);
  }
}

// Instagram Feed Home Page

var startYTVideo = function() {
  var token = '312076064.1677ed0.666b99aa3cd346d4916619e63ac862f0',
    num_photos = 9, // maximum 20
    container = document.getElementById('instafeed'), // it is our <ul id="rudr_instafeed">
    scrElement = document.createElement('script');

  window.instafeedProcessResult = function (data) {
    for (x in data.data) {
      container.innerHTML +=
        `<div class="instafeed-item-container"><img class="instafeed-item" src="${data.data[x].images.standard_resolution.url}"></div>`;
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
}

document.addEventListener("DOMContentLoaded", function (event) {
  if (document.getElementById('instafeed')) {
    startYTVideo()
  }
})