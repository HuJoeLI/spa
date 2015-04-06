$(function(){

	// 初始化 載入初始畫面

	ajax(i3s_page,function(data){
		renderPage(i3s_page,data);
	});

	// 攔截 URL 事件
	// 部分更新畫面
	$('.nav>a').click(function(event) {
		state = {
			title: $(this).data('item'),
    		url: $(this).attr('href')
		}
		ajax(state.title,function(data){
			window.history.pushState(state, document.title, state.url);
			renderPage(state.title,data);
		});
		return false;
	});

	// 攔截 上一頁 下一頁 事件
	// 部分更新畫面
	window.addEventListener('popstate', function(e){
	  if (history.state){
	  	var state = e.state;
	  	ajax(state.title,function(data){
	   		renderPage(state.title,data);
	  	});
	  }else if(history.state===null){
		ajax(i3s_page,function(data){
			renderPage(i3s_page,data);
		});
	  }
	}, false);


// 取 JSON 資料 (JSON名=URL名)
function ajax(page,callback){
	$.ajax({
		url: '/spa/data/'+page+'.json',
		dataType: 'json'
	})
	.done(function(data) { callback(data); })
	.fail(function(){ callback({item:[],error:'404'}); });	
}

// EJS 渲染
function render(set){
	var ejs = '/spa/ejs/'+set.ejs+'.ejs';
	var code = new EJS({url: ejs+'?v='+Math.floor((Math.random()*1000000))}).render(set.data),
		ele = $('<div>').append(code).children();
	if(set.target){
		if(typeof set.target=='string') set.target=$('#'+set.target);
		if(set.append) set.target.append(ele);
		else set.target.html(ele);
	}	
	return ele;
}


// 畫面控制器 (選染EJS)
function renderPage(page,data){
	// 控制器定義畫面種類
	var arr_p = ['Home','About','Demo','Other'];
	// 是這些控制器中的畫面
	// 才渲染，否則一律渲染 404 畫面
	if($.inArray(page,arr_p)<0) page = '404';

	document.title = page;

	render({
		ejs:page,
		target:'page',
		data:data
	});
}
	
});