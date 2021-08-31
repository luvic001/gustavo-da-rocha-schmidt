$ = jQuery;

$.openPopup = () => {
  $('body').addClass('popup-open');
};

$.writeInPopup = (popupTitle, popupContent) => {
  $('section.popup-site').find('.head').children('h3').html(popupTitle);
  $('section.popup-site').find('.response-content').html(popupContent);
};

$.resetPopup = () => {
  $.writeInPopup('', '');
}

$.closePopup = () => {
  $.resetPopup();
  $('body').removeClass('popup-open');
};