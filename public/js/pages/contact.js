/*
* @Author: vayne
* @Date:   2017-10-29 01:57:36
* @Last Modified by:   vayne
* @Last Modified time: 2017-10-29 02:48:19
*/
$("#whoWeAre").hover(
  function () {
    $("#whoWeAre").append('<p class="px-3 whoWeAre-text">We are a R&D house based in Xi’an China, with a team of electrical engineers and specialists, designing, developing and customizing in electrical and semiconductor related products, to meet customers’ expectations and unique requirement. Another team of software developer specialized in mobile technology and business analytics.</p><p class="px-3 whoWeAre-text">We have provided extensive mobile phone and wireless charging solutions to over 120 customer bases in various industries mainly F&B, Logistics, Automobile, hospitality, educations and etc.</p>');
  },
  function () {
    $(".whoWeAre-text").remove();
  }
);

$("#whatWeDo").hover(
  function () {
    $("#whatWeDo").append('<p class="px-3 whatWeDo-text" >We deliver a complete and comprehensive working solution to help hotels to achieve seamless operations and excellence in their services, cost reduction and simultaneously drive their revenue growth.</p><p class="px-3 whatWeDo-text">Our exclusive solution includes combinations of smart devices, apps, backend system, database and etc., it is customizable to match each customers’ unique requirements</p>');
  },
  function () {
    $(".whatWeDo-text").remove();
  }
);