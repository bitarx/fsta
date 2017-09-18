(function() {

	// Model
	var Inquery = Backbone.Model.extend({
		urlRoot : '/contact/send',    // リソースへのパス
		defaults : function() {
			return {
				'name' : null
			};
		},
		// validate
		validate: function(attrs){
			if(_.isEmpty(attrs.mail)){
				return 'メールアドレスを入力してください。';
			}
		},
		initialize: function(){
			this.on('invalid', function(model, error){
				$("#error").html(error);
			})
		},
	});

	// Collection
	var Inqueries = Backbone.Collection.extend({ model: Inquery });

	//登録フォーム部分
	var AddInqueryView = Backbone.View.extend({
	    //htmlの要素を指定します
		el: '#inqueryForm',
		events: {
		//submitされたときsubmitメソッドを起動します。
			'submit': 'submitEv'
		},
		submitEv: function(e){
			e.preventDefault();
			var saveData = {
				name: $('#name').val(),
				mail: $('#mail').val(),
				message: $('#message').val(),
			};
			var inquery = new Inquery();
			// mailをModelに設定してvalidateで判定します。
			if(inquery.set(saveData, {validate: true})){
				// save()を呼び出すと、model.urlにPOSTリクエストが送信される
				inquery.save(saveData, {
					success : function(model, resp) {
						// テンプレート表示
						$("#error").html('');
                        location.href = '/contact/complete';
					},
					error : function(model, resp) {
						$("#success").html('');
						$("#error").html('Error：Sending failed.');
						return false;
					}
				});
			}
		}
	});

	 // インスタンス化
	 var inqueries = new Inqueries();
	 var addInqueryView = new AddInqueryView({collection: inqueries});
})();

$(function() {
    var nav = $('nav');
    var navTop = nav.offset().top;
    $(window).scroll(function () {
        var winTop = $(this).scrollTop();
        if (winTop >= navTop) {
            nav.addClass('fixed')
        } else if (winTop <= navTop) {
            nav.removeClass('fixed')
        }
    });

    // メニュークリック後遷移先位置を調整
    $('a[href^=#]').click(function(){
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top-$('#mainImg').offset().top;
        $("html, body").animate({scrollTop:position}, 550, "swing");
        return false;
    });

    // スマホでメニューをクリックするとメニューを非表示にする
    $('#panel ul li a').click(function(){
        $('#panel').attr({"style":"display:none"});
    });

    $('.flexslider').flexslider({
        animation: "fade",
        slideshow: true,
        directionNav: true,
        controlNav: true,
        slideshowSpeed: 5500,
    });
});
