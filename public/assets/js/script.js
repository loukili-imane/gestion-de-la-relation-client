$(function () {
    $("#forgot-link").click(function () {
      $("#login-box").hide();
      $("#forgot-box").show();
    });
    $("#back-link").click(function () {
      $("#login-box").show();
      $("#forgot-box").hide();
    });
   

  });