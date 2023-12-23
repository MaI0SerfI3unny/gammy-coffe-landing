// JS fragment import example
import * as functions from './modules/functions.js';
functions.isWebp();
functions.spollers();

// БАЗОВІ СКРИПТИ
import './modules/base.js';



$(document).ready(function () {
  AOS.init();

  IMask(document.getElementById('phone-mask'), {
    mask: '+{380}(00)000-00-00',
  });

  $('.form__products-count').each(function () {
    const inputElement = $(this).find('.form__products-item');
    const minusButton = $(this).find('.minus');
    const plusButton = $(this).find('.plus');

    minusButton.click(function () {
      var currentValue = parseInt(inputElement.val());
      if (currentValue > 0) {
        inputElement.val(currentValue - 1);
      }
      if (inputElement.val() == 0) {
        minusButton.addClass('disabled');
      } else {
        minusButton.removeClass('disabled');
      }
      if ($(inputElement.val() !== 0)) {
        $('.form__price-item').val(
          Number($('.form__price-item').val() - inputElement.attr('data-price')),
        );
      }
    });
    plusButton.click(function () {
      var currentValue = parseInt(inputElement.val());
      if (currentValue < parseInt(inputElement.attr('max'))) {
        inputElement.val(currentValue + 1);
        if ($(inputElement.val() !== 0)) {
          $('.form__price-item').val(
            +inputElement.attr('data-price') + Number($('.form__price-item').val()),
          );
        }
      }
      if (inputElement.val() != 0) {
        minusButton.removeClass('disabled');
      }
    });
  });
});

import './modules/rating.js';
import './modules/video.js';
import './modules/available_like.js';
import './modules/get_comment.js';
import './modules/post_comment.js';

import './libs/dynamicAdapt.js';