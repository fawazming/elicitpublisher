jQuery(document).ready(function($){"use strict";var sequenceElement_single=document.getElementById("sequence-single");$('.sabbi-book_timeline .btn-expand').on('click',function(event){event.preventDefault();var btnThis=$(this);btnThis.siblings('.book-list').find('.onexpan').slideToggle(200);if(btnThis.text()!="View Less"){btnThis.text('View Less');}else{btnThis.text(btnThis.data('text'));}});var options={startingStepAnimatesIn:true,autoPlay:false,phaseThreshold:250,preloader:false,reverseWhenNavigatingBackwards:false,fadeStepWhenSkipped:false,navigationSkip:true}
if($(sequenceElement_single).length){var mySequence_single=sequence(sequenceElement_single,options);}
(function(){var sequenceElement=document.getElementById("sequence");var options={startingStepAnimatesIn:true,autoPlay:false,phaseThreshold:250,preloader:true,reverseWhenNavigatingBackwards:true,keyNavigation:true,fadeStepWhenSkipped:false}
if($(sequenceElement).length){var mySequence=sequence(sequenceElement,options);}})();$(document).on('click','[data-toggle="lightbox"]',function(event){event.preventDefault();$(this).ekkoLightbox();});if($("#Inputphone").length){$("#Inputphone").intlTelInput({geoIpLookup:function(callback){$.get("http://ipinfo.io",function(){},"jsonp").always(function(resp){var countryCode=(resp&&resp.country)?resp.country:"";callback(countryCode);});},preferredCountries:['bd','jp'],utilsScript:"assets/tools/intlTelInput/js/utils.js"});}
function validateEmail(email){var re=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;return re.test(email);}
$('#contact-form').on('submit',function(e){var formThat=$(this);e.preventDefault();$('#form_errors').addClass('hide');var data=$(this).serialize();if(validateEmail($(this).find('input[name="email"]').val())){$.ajax({type:"POST",url:$(this).attr('action'),data:data,success:function(res){res=$.parseJSON(res);if(res.status){$('#form_errors').addClass('hide');$('#form_success').html(res.message).removeClass('hide');formThat.find('.btn').attr('disabled','disabled');}else{$('#form_errors').html(res.message).removeClass('hide');}}});}else{$('#form_errors').html('Please give a valid email address').removeClass('hide');}
return false;});});