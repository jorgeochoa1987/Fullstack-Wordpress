
var grid = document.querySelector('.grid');
var msnry;

imagesLoaded( grid, function() {
  msnry = new Masonry( grid, {
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
  });
});