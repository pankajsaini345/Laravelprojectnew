@extends('layouts.front.front')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
     $(document).ready(function () {
     setInterval(function () {
       $.ajax({
     type:'GET',
     enctype: 'multipart/form-data',
     url:"{{ url('ajax_chalange') }}",

     contentType: false,
     processData: false,
     success:function(data){
           console.log(data.challenges);
       		$('#rp2').html(data.myChallenges);
       		$('#rp21').html(data.challenges);
       			$('#rp3').html(data.myPlayChallenges);
       			 			$('#d2').html(data.playChallenges);
     }
});
       
 
       }, 2000);
     });
</script>




<div class="main-area" style="padding-top: 100px;">
		<div class="alert alert-danger alert-dismissible fade show" id="success-error-div" role="alert" style="dispaly:none;position:fixed;top:50px;width:100%;z-index:100;">
			<span id="success-error-message"></span>			
		</div>
	  <!-----<marquee style="color:red">महतवप्ण सचा : ApnaLudo स संबित किस भी स् के समाा क ल आ हमार 8233656748 बाइल ंब  सप् कर सकत ह संप्क कर का मय सबह 10  े शाम 8 ब क है। अ्य किसी  नबर े समस का  नहीं ोग</marquee>----->
      <div id="content"></div>
  
  <span class="cxy battle-input-header">Create a Battle!</span>
      <div class="mx-auto d-flex my-2 w-50">
	  	<form action="{{route('create-challenge')}}" id="create-challenge" method="POST">
		  @csrf
			<div>
				<input style="width:60%;" class="form-control pull-left" name="amount" autocomplete="off" id="challenge-amount" type="tel" placeholder="Amount" value="">				
			
			<button  class="bg-green playButton cxy position-static pull-left" style="height:36px; @media (max-width: 366px) { margin-left:3px } @media (min-width: 365px){ margin-right:5px } { margin-left:10px }">Set</button>
			</div>
			<span style="color:red;display:none" id="challenge-amount-error">this is errro</span>
		</form>
      </div>
      <div class="divider-x"></div>
      <div class="px-4 py-3">
        <div class="mb-2"><img src="{{ asset('front/images/award-blue.png')}}" width="20px" alt=""><span
            class="ml-2 games-section-title">Open Battles</span><span
            class="games-section-headline text-uppercase position-relative mt-2 font-weight-bold float-right"
            style="top: -0.2rem;"><a href="{{route('front.game-rules')}}">Rules <i class="fa fa-info-circle" aria-hidden="true"></i></a></span></div>
        
        <div id="my-challenge-div">
          <div id="rf2">
          <div id="rp2">
			

      		</div>
      		<div id="rp21">
			

      		</div>

				</div>
      <div class="divider-x"></div>
      <div class="px-4 py-3">
        <div class="mb-2"><img src="{{ asset('front/images/award-blue.png')}}" width="20px" alt=""><span
            class="ml-2 games-section-title">Running Battles</span></div>
        <div></div>
		<div id="mychallenge-div-play">
          <div id="rp3">
		



		</div>
          
		<div id="challenge-div-play">
			 <div id="d2">


			 </div>
			



		</div>
      </div>
</div>
    
  <div class="divider-y"></div>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.socket.io/4.4.1/socket.io.min.js" integrity="sha384-fKnu0iswBIqkjxrhQCTZ7qlLHOFEgNkRmK2vaO/LbTZSXdJfAu6ewRBdwHPhBo/H" crossorigin="anonymous"></script>







	<script>
		$(function(){
			$('#success-error-div').hide();
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			@if (isset($payment_status))
		
				//alert( "<?php echo $payment_status; ?>" );
				hideSuccessErrorDiv('alert-danger','alert-success','<?php echo $payment_status; ?>');	
		
			@endif


			let ip_address  =   '127.0.0.1';
			let socket_port =   '5000';
			let socket      =   io(ip_address   + ':' + socket_port);

			socket.on('createChallengeClient',(data) => {
				var htmlData	=	createChallengeSoc(data);
				$("#challenge-div").prepend(htmlData);
			});

			socket.on('cancelReqClient',(data) => {
				var htmlData	=	cancelReqSoc(data);
				//$("#challenge-div").prepend(htmlData);
			});

			socket.on('cancelChallengeClient',(data) => {
				$('#chdiv-'+data).hide();
			});

			socket.on('playChallengeClient',(data) => {
				playChallengeSoc(data);
			});

			socket.on('acceptChallengeClient',(data) => {
				acceptChallengeSoc(data);
			});

			socket.on('startChallengeClient',(data) => {
				startChallengeSoc(data);
			});

			socket.on('userResultClient',(data) => {
				$('#chdiv-'+data).hide();
			});	
			
			// $('#challenge-amount').keyup(function(e)
			// { 
			// 	var amount	=	$('#challenge-amount').val();
			// 	var flag			=	1;
			// 	var valid			=	1;
				
			// 	if(!amount){
			// 		$('#challenge-amount-error').text('Please enter amount');
			// 		$('#challenge-amount-error').addClass('error');
			// 		$('#challenge-amount-error').show();
			// 		flag = 0;
			// 	}else if(! $.isNumeric(amount)){
			// 		$('#challenge-amount-error').text('Please enter numeric value');
			// 		$('#challenge-amount-error').addClass('error');
			// 		$('#challenge-amount-error').show();
			// 		$('#challenge-amount').val('');
			// 		flag = 0;
			// 	}else if(!(amount == 30 || amount == 40 || amount%50==0)){							
			// 		$('#challenge-amount-error').text('Invalid amount!');
			// 		$('#challenge-amount-error').addClass('error');
			// 		$('#challenge-amount-error').show();
			// 		flag = 0;
			// 	}else{
			// 		$('#challenge-amount-error').text('');
			// 		$('#challenge-amount-error').removeClass('error');
			// 		$('#challenge-amount-error').hide();
			// 	}						
			// });

			$('#create-challenge').submit(function(e)
			{ 				
				e.preventDefault();
				var amount	=	$('#challenge-amount').val();
				
				var flag			=	1;
				
				if(!amount){
					hideSuccessErrorDiv('alert-success','alert-danger','Please enter amount');
					// $('#challenge-amount-error').text('Please enter amount');
					// $('#challenge-amount-error').addClass('error');
					// $('#challenge-amount-error').show();
					flag = 0;
				}else if(! $.isNumeric(amount)){
					hideSuccessErrorDiv('alert-success','alert-danger','Please enter numeric value');
					// $('#challenge-amount-error').text('Please enter numeric value');
					// $('#challenge-amount-error').addClass('error');
					// $('#challenge-amount-error').show();
					$('#challenge-amount').val('');
					flag = 0;
				}else if(!(amount%50==0)){		
					hideSuccessErrorDiv('alert-success','alert-danger','Please enter a valid amount');					
					// $('#challenge-amount-error').text('Invalid amount!');
					// $('#challenge-amount-error').addClass('error');
					// $('#challenge-amount-error').show();
					flag = 0;
				}
				
				
				if(flag){
					$form = $(this);
					
					$.ajax({
						type: "POST",
						async: false,
						dataType: 'json',
						url: '{{ route('create-challenge') }}',
						data: $form.serialize(),
						beforeSend: function(){
							$('.loading').show();
						},
						success:function(data){							
							socket.emit('createChallengeServer', data.data);
							var htmlData	=	listChallengeCre(data.data);
						//	$("#my-challenge-div").append(htmlData);
					},
					error:function(data){
						var errors = $.parseJSON(data.responseText);
						// $('#challenge-amount-error').text(errors.message);
						// $('#challenge-amount-error').show();
						hideSuccessErrorDiv('alert-success','alert-danger',errors.message);	
					},
					complete:function(){	
						$('#challenge-amount').val('');					
						$('.loading').hide();
					}
						
					});
				}			
          });

			
		});

		function hideSuccessErrorDiv(remove_class,add_class,message){
			$('#success-error-div').removeClass(remove_class);
			$('#success-error-div').addClass(add_class);
			$('#success-error-div').show();
			$('#success-error-message').text(message);
			$("#success-error-div").fadeTo(2000, 500).slideUp(500, function(){
				$("#success-error-div").hide(500);
			});
		}

		function playNotification() {
			var url	=	" {{ asset('front/sound/notification.mp3')}} ";
			const audio = new Audio(url);
			audio.play();
		}

		function playStart() {
			var url	=	" {{ asset('front/sound/start-game.mp3')}} ";
			const audio = new Audio(url);
			audio.play();
		}

		function createSocket(){
			
			let ip_address  =   '127.0.0.1';
			let socket_port =   '5000';
			let socket      =   io(ip_address   + ':' + socket_port);
			return socket;
		}

		function createChallengeSoc(data){ 
			var prize	=	getPrizeAmount(data.amount);
			var html=	'';
			
			html	+='<div id="pp2"><div id="chdiv-'+data.id+'" class="betCard mt-1">';
			html	+='<span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">'+data.cname+' </span></span>';
			html	+='<div class="d-flex pl-3"><div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>';
			html	+='<div class="global-rupee-icon"><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+data.amount+'</span></div></div>';
			html	+='<div><span class="betCard-subTitle">Prize</span><div><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+prize+'</span></div>';
			html	+='</div><button id="'+data.id+'-play" class="bg-secondary playButton cxy" onclick="playChallenge('+data.id+');">Play</button></div></div></div>';

			return html;
		}

		function listChallengeCre(data){
			var prize	=	getPrizeAmount(data.amount);
			var html=	'';

			html	+='<div id="pp2"><div id="chdiv-'+data.id+'" class="betCard mt-1"><div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR';
			html	+='<img class="mx-1" src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt="">'+data.amount+'</span><div class="betCard-title d-flex align-items-center text-uppercase">';
			html	+='<span class="ml-auto" id="'+data.id+'-buttons"><button class="btn btn-danger px-3 btn-sm" onclick="cancelChallengeCre('+data.id+')">DELETE</button>';
			html	+='</span></div></div><div class="py-1 row"><div class="pr-3 text-center col-5"><div class="pl-2"><img class="border-50" src="{{ asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div>';
			html	+='<div style="line-height: 1;"><span class="betCard-playerName">'+data.cname+'</span></div></div><div class="pr-3 text-center col-2 cxy">';
			html	+='<div><img src="{{ asset('front/images/vs.png')}}" width="30px" alt=""></div></div><div class="text-center col-5"><div class="pl-2">';
			html	+='<img class="border-50" id="'+data.id+'-loading" src="{{ asset('front/images/small-loading.gif')}}" width="21px" height="21px" alt=""></div><div style="line-height: 1;"><span class="betCard-playerName" id="'+data.id+'-finding">Finding Player</span></div></div></div></div></div>';

			return html;
		}

		function getPrizeAmount(amount){
			var prize;
			if(amount == 50){
				prize	=	((2 * amount) - 5);
			}else if(amount > 50 && amount <= 250){
				prize	=	(2 * amount) - (10/100*amount);
			}else if(amount > 250 && amount <= 500){
				prize	=	((amount * 2) - 25);
			}else if(amount > 500){
				prize 	=	(amount * 2) - (5/100*amount);
			}
			return prize;
		}

		function playingGameHtml(data){
			var html	=	'';
			var prize	=	getPrizeAmount(data.amount);
			html	+='<div id="pp2"><div class="betCard mt-1" id="playing-chdiv-'+data.id+'"><div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR123';
			html	+='<img class="mx-1" src="{{asset('front/images/global-rupeeIcon.png')}}" width="21px" alt="">'+data.amount+'</span><div class="betCard-title d-flex align-items-center text-uppercase"><span class="ml-auto mr-3">PRIZE';
			html	+='<img  class="mx-1" src="{{asset('front/images/global-rupeeIcon.png')}}" width="21px" alt="">'+prize+'</span></div></div><div class="py-1 row"><div class="pr-3 text-center col-5">';
			html	+='<div class="pl-2"><img class="border-50" src="{{asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div>';
			html	+='<div style="line-height: 1;"><span class="betCard-playerName">'+data.cname+'</span></div></div><div class="pr-3 text-center col-2 cxy">';
			html	+='<div><img src="{{asset('front/images/vs.png')}}" width="30px" alt=""></div></div><div class="text-center col-5">';
			html	+='<div class="pl-2"><img class="border-50" src="{{asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div>';
			html	+='<div style="line-height: 1;"><span class="betCard-playerName">'+data.oname+'</span></div></div></div></div></div>';

			return html;
		}

		function acceptDenyHtml(data){
			var html	=	'';
			var prize	=	getPrizeAmount(data.amount);
			html	+='<div id="pp2"><div id="chdiv-'+data.id+'" class="betCard mt-1"><div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR';
			html	+='<img class="mx-1" src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt="">'+prize+'</span><div class="betCard-title d-flex align-items-center text-uppercase">';
			html	+='<span class="ml-auto" id="'+data.id+'-buttons"><button id="'+data.id+'-accept" class="btn btn-success px-3 btn-sm" style="cursor: pointer;float: left;width: 65px;height: 31px; " onclick="acceptChallenge('+data.id+')">START</button><button id="'+data.id+'-deny" class="btn btn-danger px-3 btn-sm" style="cursor: pointer;float: right;width: 72px;height: 31px;" onclick="denyChallenge('+data.id+')">REJECT</button>';
			html	+='</span></div></div><div class="py-1 row"><div class="pr-3 text-center col-5"><div class="pl-2"><img class="border-50" src="{{ asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div>';
			html	+='<div style="line-height: 1;"><span class="betCard-playerName">'+data.cname+'</span></div></div><div class="pr-3 text-center col-2 cxy">';
			html	+='<div><img src="{{ asset('front/images/vs.png')}}" width="30px" alt=""></div></div><div class="text-center col-5"><div class="pl-2">';
			html	+='<img class="border-50" src="{{ asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div><div style="line-height: 1;"><span class="betCard-playerName">'+data.oname+'</span></div></div></div></div></div>';
			return html;
		}

		function cancelReqHtml(data){
			// var html	=	'';
			// var prize	=	getPrizeAmount(data.amount);
			// html	+='<div id="chdiv-'+data.id+'" class="betCard mt-1">';
			// html	+='<span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">You </span></span>';
			// html	+='<div class="d-flex pl-3"><div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>';
			// html	+='<div class="global-rupee-icon"><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+data.amount+'</span></div></div>';
			// html	+='<div><span class="betCard-subTitle">Prize</span><div><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+prize+'</span></div>';
			// html	+='</div><button href="javascript:void(0)" class="bg-warning playButton cxy" onclick="cancelChallengeReq('+data.id+');">Requested</button></div></div>';

			// return html;
		}

		function startGameHtml(data){
			var prize	=	getPrizeAmount(data.amount);
			var html=	'';

			html	+='<div id="pp2"><div id="chdiv-'+data.id+'" class="betCard mt-1"><div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">'+data.cname+' </span></span>';
			html 	+='<div class="d-flex pl-3"><div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span><div><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+data.amount+'</span>';
			html 	+='</div></div><div><span class="betCard-subTitle">Prize</span><div><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+prize+'</span>';
			html 	+='</div></div><button id="'+data.id+'-start-btn" class="bg-success playButton cxy" onclick="startChallenge('+data.id+')">START</button></div></div></div>';
			return html;
		}

		function viewGameHtml(data){
			var prize	=	getPrizeAmount(data.amount);
			var html=	'';

			html	+='<div id="pp2"><div class="betCard mt-1" id="myplaying-chdiv-'+data.id+'" ><div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR';
			html	+='<img class="mx-1" src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt="">'+prize+'</span><div class="betCard-title d-flex align-items-center text-uppercase">';
			html	+='<span class="ml-auto"><a href="{{ route('challenge-detail','+data.id+') }}"  class="btn btn-info px-3 btn-sm" >View</a>	</span></div></div>';
			html	+='<div class="py-1 row"><div class="pr-3 text-center col-5"><div class="pl-2"><img class="border-50" src="{{ asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div>';
			html	+='<div style="line-height: 1;"><span class="betCard-playerName">'+data.cname+'</span></div></div><div class="pr-3 text-center col-2 cxy">';
			html	+='<div><img src="{{ asset('front/images/vs.png')}}" width="30px" alt=""></div></div><div class="text-center col-5">';
			html	+='<div class="pl-2"><img class="border-50" src="{{ asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div>';
			html	+='<div style="line-height: 1;"><span class="betCard-playerName">'+data.oname+'</span></div></div></div></div></div>';
			return html;
		}

		function playChallengeSoc(data){
			var prize	=	getPrizeAmount(data.amount);
			var html=	'';
			var user_id	=	'{{Auth::user()->id}}';
			//$('#chdiv-'+data.id).remove();
			if(data.c_id == user_id){ 
				var html;
				//$('#chdiv-'+data.id).remove();
				playStart();
				console.log('Buttons '+data.id+'-buttons');
				document.getElementById(data.id+'-buttons').innerHTML	=	'';
				html	=	'<div id="pp2"><button id="'+data.id+'-accept" class="btn btn-success px-3 btn-sm" style="cursor: pointer;float: left;width: 65px;height: 31px; " onclick="acceptChallenge('+data.id+')">START</button><button id="'+data.id+'-deny" class="btn btn-danger px-3 btn-sm" style="cursor: pointer;float: right;width: 72px;height: 31px;" onclick="denyChallenge('+data.id+')">REJECT</button></div>';
				document.getElementById(data.id+'-buttons').innerHTML	=	html;
				document.getElementById(data.id+'-finding').innerHTML	=	data.oname;
				
				var loading	=	document.getElementById(data.id+"-loading");
				loading.setAttribute("src","");
				loading.setAttribute("src","{{ asset('front/images/author.svg')}}");

				// var htmlData	=	acceptDenyHtml(data);
				// $("#my-challenge-div").prepend(htmlData);
			}else if(data.o_id == user_id){
				//var htmlData	=	cancelReqHtml(data);				
				//$("#my-challenge-div").prepend(htmlData);
			}else{
				$('#chdiv-'+data.id).remove();
				var htmlCode	=	playingGameHtml(data);
				//$('#challenge-div-play').append(htmlCode);
			}			
		}

		function cancelReqSoc(data){
			var user_id	=	'{{Auth::user()->id}}';
			console.log('Socc '+data.id+'-buttons');
			if(data.c_id == user_id){			
				document.getElementById(data.id+'-buttons').innerHTML	=	'';
				html	=	'<div id="pp2"><button class="btn btn-danger px-3 btn-sm" onclick="cancelChallengeCre('+data.id+')">DELETE</button></div>';
				document.getElementById(data.id+'-buttons').innerHTML	=	html;
				$("#"+data.id+"-finding").text('');
				$("#"+data.id+"-finding").text('Finding Player');
				var loading	=	document.getElementById(data.id+"-loading");
				loading.setAttribute("src","");
				loading.setAttribute("src","{{ asset('front/images/small-loading.gif')}}");
				//$('#chdiv-'+data.id).remove();	
				//var htmlData	=	listChallengeCre(data);
				//$("#my-challenge-div").prepend(htmlData);
			}else if(data.o_id == user_id){
				document.getElementById(data.id+'-buttons').innerHTML	=	'';
				html	=	'<div id="pp2"><button id="'+data.id+'-play" class="bg-secondary playButton cxy" onclick="playChallenge('+data.id+');">Play</button></div>';
				document.getElementById(data.id+'-buttons').innerHTML	=	html;
			}else{				
				var requestBtn	=	document.getElementById(data.id+"-requested");
				if(requestBtn != null || requestBtn != undefined){
					$("#"+data.id+"-requested").removeClass('bg-warning');
					$("#"+data.id+"-requested").addClass('bg-secondary');
					$("#"+data.id+"-requested").text('');
					$("#"+data.id+"-requested").text('Play');
					requestBtn.removeAttribute("onclick");
					requestBtn.removeAttribute("id");
					requestBtn.setAttribute("id",data.id+"-play");
					requestBtn.setAttribute("onclick","playChallenge("+data.id+");");

				}
				var playingGame	=	document.getElementById('playing-chdiv-'+data.id);
				if(playingGame != null || playingGame != undefined){
					$('#playing-chdiv-'+data.id).remove();
					var htmlCode	=	createChallengeSoc(data);
					$('#challenge-div').append(htmlCode);
				}
			}			
		}

		function acceptChallengeSoc(data){
			var html=	'';
			var user_id	=	'{{Auth::user()->id}}';
			if(data.c_id == user_id){ 
				$('#chdiv-'+data.id).remove();
				var htmlCode	=	viewGameHtml(data);				
			//	$('#mychallenge-div-play').append(htmlCode);
				let redirectURL = "{{ route('challenge-detail', ':id') }}";
				redirectURL = redirectURL.replace(':id', data.id);
				window.location.href = redirectURL;
			}else if(data.o_id == user_id){
				playStart();

				var requestBtn	=	document.getElementById(data.id+"-requested");
				$("#"+data.id+"-requested").removeClass('bg-warning');
				$("#"+data.id+"-requested").addClass('bg-success');
				$("#"+data.id+"-requested").text('');
				$("#"+data.id+"-requested").text('START');
				requestBtn.removeAttribute("onclick");
				requestBtn.removeAttribute("id");
				requestBtn.setAttribute("id",data.id+"-start-btn");
				requestBtn.setAttribute("onclick","startChallenge("+data.id+");");
				//$('#chdiv-'+data.id).remove();
				//var htmlCode	=	startGameHtml(data);				
				//$('#challenge-div').prepend(htmlCode);
			}
		}

		function startChallengeSoc(data){
			var html=	'';
			var user_id	=	'{{Auth::user()->id}}';
			if(data.c_id == user_id || data.o_id == user_id){
				$('#chdiv-'+data.id).remove();
				var htmlCode	=	viewGameHtml(data);				
			//	$('#mychallenge-div-play').append(htmlCode);
				let redirectURL = "{{ route('challenge-detail', ':id') }}";
				redirectURL = redirectURL.replace(':id', data.id);
				window.location.href = redirectURL;
			}
		}
		
		function cancelChallengeCre(ch_id){
			let socket = createSocket();
			$('.loading').show();						
			$.ajax({
				type: "POST",
				async: false,
				dataType: 'json',
				url: '{{ route('cancel-challenge') }}',
				data: 'ch_id='+ch_id,
				beforeSend: function(){
					
				},
				success:function(data){
					socket.emit('cancelChallengeServer', data.data);
					$("#chdiv-"+data.data).hide();
				},
				error:function(data){
					var errors = $.parseJSON(data.responseText);
					// $('#challenge-amount-error').text(errors.message);
					// $('#challenge-amount-error').show();
					hideSuccessErrorDiv('alert-success','alert-danger',errors.message);	
				},
				complete:function(){
					// $('#create-challenge')[0].reset();
					$('.loading').hide();
				}
				
			});		
		}

		function playChallenge(ch_id){
			let socket = createSocket();
			$('.loading').show();						
			$.ajax({
				type: "POST",
				async: false,
				dataType: 'json',
				url: '{{ route('play-challenge') }}',
				data: 'ch_id='+ch_id,
				beforeSend: function(){
					
				},
				success:function(data){
					socket.emit('playChallengeServer', data.data);
					var playBtn	=	document.getElementById(ch_id+"-play");
					$("#"+ch_id+"-play").removeClass('bg-secondary');
					$("#"+ch_id+"-play").addClass('bg-warning');
					$("#"+ch_id+"-play").text('');
					$("#"+ch_id+"-play").text('Requested');
					playBtn.removeAttribute("onclick");
					playBtn.setAttribute("onclick","cancelChallengeReq("+ch_id+");");
					// playBtn.addEventListener("click", function () {
					// 	cancelChallengeReq(ch_id);
					// });
					playBtn.removeAttribute("id");
					playBtn.setAttribute("id",ch_id+"-requested");
					//$("#chdiv-"+data.data).hide();
				},
				error:function(data){
					var errors = $.parseJSON(data.responseText);
					// $('#challenge-amount-error').text(errors.message);
					// $('#challenge-amount-error').show();
					hideSuccessErrorDiv('alert-success','alert-danger',errors.message);	
				},
				complete:function(){
					// $('#create-challenge')[0].reset();
					$('.loading').hide();
				}
				
			});		
		}

		function acceptChallenge(ch_id){
			let socket = createSocket();
			$('.loading').show();						
			$.ajax({
				type: "POST",
				async: false,
				dataType: 'json',
				url: '{{ route('accept-challenge') }}',
				data: 'ch_id='+ch_id,
				beforeSend: function(){
					
				},
				success:function(data){
					socket.emit('acceptChallengeServer', data.data);
					//$("#chdiv-"+data.data).hide();
				},
				error:function(data){
					var errors = $.parseJSON(data.responseText);
					// $('#challenge-amount-error').text(errors.message);
					// $('#challenge-amount-error').show();
					hideSuccessErrorDiv('alert-success','alert-danger',errors.message);	
				},
				complete:function(){
					// $('#create-challenge')[0].reset();
					$('.loading').hide();
				}
				
			});		
		}

		function denyChallenge(ch_id){
			let socket = createSocket();
			$('.loading').show();	
				
			$.ajax({
				type: "POST",
				async: false,
				dataType: 'json',
				url: '{{ route('deny-challenge') }}',
				data: 'ch_id='+ch_id,
				beforeSend: function(){
					
				},
				success:function(data){ console.log('Deny  '+ch_id+'-buttons');
					socket.emit('cancelReqServer', data.data);
					document.getElementById(ch_id+'-buttons').innerHTML	=	'';
					html	=	'<div id="pp2"><button class="btn btn-danger px-3 btn-sm" onclick="cancelChallengeCre('+ch_id+')">DELETE</button></div>';
					document.getElementById(ch_id+'-buttons').innerHTML	=	html;
					//socket.emit('createChallengeServer', data.data);
					//$("#chdiv-"+data.data).hide();
				},
				error:function(data){
					var errors = $.parseJSON(data.responseText);
					// $('#challenge-amount-error').text(errors.message);
					// $('#challenge-amount-error').show();
					hideSuccessErrorDiv('alert-success','alert-danger',errors.message);	
				},
				complete:function(){
					// $('#create-challenge')[0].reset();
					$('.loading').hide();
				}
				
			});		
		}

		function startChallenge(ch_id){
			let socket = createSocket();
			$('.loading').show();						
			$.ajax({
				type: "POST",
				async: false,
				dataType: 'json',
				url: '{{ route('start-challenge') }}',
				data: 'ch_id='+ch_id,
				beforeSend: function(){
					
				},
				success:function(data){
					socket.emit('startChallengeServer', data.data);
					//$("#chdiv-"+data.data).hide();
				},
				error:function(data){
					var errors = $.parseJSON(data.responseText);
					// $('#challenge-amount-error').text(errors.message);
					// $('#challenge-amount-error').show();
					hideSuccessErrorDiv('alert-success','alert-danger',errors.message);	
				},
				complete:function(){
					// $('#create-challenge')[0].reset();
					$('.loading').hide();
				}
				
			});		
		}

		function cancelChallengeReq(ch_id){
			let socket = createSocket();
			$('.loading').show();						
			$.ajax({
				type: "POST",
				async: false,
				dataType: 'json',
				url: '{{ route('cancel-challenge-req') }}',
				data: 'ch_id='+ch_id,
				beforeSend: function(){
					
				},
				success:function(data){
					socket.emit('cancelReqServer', data.data);
					var requestBtn	=	document.getElementById(ch_id+"-requested");
					$("#"+ch_id+"-requested").removeClass('bg-warning');
					$("#"+ch_id+"-requested").addClass('bg-secondary');
					$("#"+ch_id+"-requested").text('');
					$("#"+ch_id+"-requested").text('Play');
					requestBtn.removeAttribute("onclick");
					requestBtn.removeAttribute("id");
					requestBtn.setAttribute("id",ch_id+"-play");
					requestBtn.setAttribute("onclick","playChallenge("+ch_id+");");
					// requestBtn.addEventListener("click", function () {
					// 	playChallenge(ch_id);
					// });
				},
				error:function(data){
					var errors = $.parseJSON(data.responseText);
					// $('#challenge-amount-error').text(errors.message);
					// $('#challenge-amount-error').show();
					hideSuccessErrorDiv('alert-success','alert-danger',errors.message);	
				},
				complete:function(){
					// $('#create-challenge')[0].reset();
					$('.loading').hide();
				}
				
			});		
		}

		$(window).on('focus', function () {
			// Append this text to the `body` element.
			$.ajax({
				type: "GET",
				dataType: 'json',
				url: '{{ route('challenge-listing') }}',				
				beforeSend: function(){
					
				},
				success:function(data){
					var myChallenges 		= data.data.myChallenges;
					var challenges 			= data.data.challenges;
					var myPlayChallenges 	= data.data.myPlayChallenges;
					
					var challengeDivHtml	=	setChallengsOpen(challenges);
					$("#challenge-div").empty();
					$("#challenge-div").append(challengeDivHtml);

					var myChallengeDivHtml	=	setMyChallenges(myChallenges);
				//	$("#my-challenge-div").empty();
			//		$("#my-challenge-div").append(myChallengeDivHtml);

					var myPlayChallengeDivHtml	=	setMyPlayChallenges(myPlayChallenges);
				//	$("#mychallenge-div-play").empty();
					$("#mychallenge-div-play").append(myPlayChallengeDivHtml);
					
				//	$("#challenge-div").innerHTML = '<h1>HIIII</h1>';
				},
				error:function(data){
					var errors = $.parseJSON(data.responseText);
					// $('#challenge-amount-error').text(errors.message);
					// $('#challenge-amount-error').show();
					hideSuccessErrorDiv('alert-success','alert-danger',errors.message);	
				},
				complete:function(){
					// $('#create-challenge')[0].reset();
					$('.loading').hide();
				}
				
			});	
		});

		function setChallengsOpen(challenges){
			var user_id	=	'{{Auth::user()->id}}';
			var html	=	'';
			for (let i = 0; i < challenges.length; i++) {
				var prize = getPrizeAmount(challenges[i].amount);
				if(challenges[i].c_id == user_id){					
					html	+='<div id="pp2"><div id="chdiv-'+challenges[i].id+'" class="betCard mt-1"><div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR';
					html	+='<img class="mx-1" src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt="">'+challenges[i].amount+'</span><div class="betCard-title d-flex align-items-center text-uppercase">';
					html	+='<span class="ml-auto" id="'+challenges[i].id+'-buttons"><button class="btn btn-danger px-3 btn-sm" onclick="cancelChallengeCre('+challenges[i].id+')">DELETE</button>';
					html	+='</span></div></div><div class="py-1 row"><div class="pr-3 text-center col-5"><div class="pl-2"><img class="border-50" src="{{ asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div>';
					html	+='<div style="line-height: 1;"><span class="betCard-playerName">'+challenges[i].cname+'</span></div></div><div class="pr-3 text-center col-2 cxy">';
					html	+='<div><img src="{{ asset('front/images/vs.png')}}" width="30px" alt=""></div></div><div class="text-center col-5"><div class="pl-2">';
					html	+='<img class="border-50" id="'+challenges[i].id+'-loading" src="{{ asset('front/images/small-loading.gif')}}" width="21px" height="21px" alt=""></div><div style="line-height: 1;"><span class="betCard-playerName" id="'+challenges[i].id+'-finding">Finding Player</span></div></div></div></div></div>';
				}else{
					html	+='<div id="pp2"><div id="chdiv-'+challenges[i].id+'" class="betCard mt-1">';
					html	+='<span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">'+challenges[i].cname+' </span></span>';
					html	+='<div class="d-flex pl-3"><div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>';
					html	+='<div class="global-rupee-icon"><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+challenges[i].amount+'</span></div></div>';
					html	+='<div><span class="betCard-subTitle">Prize</span><div><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+prize+'</span></div>';
					html	+='</div><button id="'+challenges[i].id+'-play" class="bg-secondary playButton cxy" onclick="playChallenge('+challenges[i].id+');">Play</button></div></div></div>';
				}			
			}

			return html;
		}

		function setMyChallenges(myChallenges){
			var user_id	=	'{{Auth::user()->id}}';
			var html	=	'';
			for (let i = 0; i < myChallenges.length; i++) {
				var prize = getPrizeAmount(myChallenges[i].amount);
				if(myChallenges[i].status == 1 && myChallenges[i].c_id == user_id){
					html	+='<div id="pp2"><div id="chdiv-'+myChallenges[i].id+'" class="betCard mt-1"><div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR';
					html	+='<img class="mx-1" src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt="">'+myChallenges[i].amount+'</span><div class="betCard-title d-flex align-items-center text-uppercase">';
					html	+='<span class="ml-auto" id="'+myChallenges[i].id+'-buttons"><button class="btn btn-danger px-3 btn-sm" onclick="cancelChallengeCre('+myChallenges[i].id+')">DELETE</button>';
					html	+='</span></div></div><div class="py-1 row"><div class="pr-3 text-center col-5"><div class="pl-2"><img class="border-50" src="{{ asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div>';
					html	+='<div style="line-height: 1;"><span class="betCard-playerName">'+myChallenges[i].cname+'</span></div></div><div class="pr-3 text-center col-2 cxy">';
					html	+='<div><img src="{{ asset('front/images/vs.png')}}" width="30px" alt=""></div></div><div class="text-center col-5"><div class="pl-2">';
					html	+='<img class="border-50" id="'+myChallenges[i].id+'-loading" src="{{ asset('front/images/small-loading.gif')}}" width="21px" height="21px" alt=""></div><div style="line-height: 1;"><span class="betCard-playerName" id="'+myChallenges[i].id+'-finding">Finding Player</span></div></div></div></div></div>';
				}else if(myChallenges[i].status == 1 && myChallenges[i].o_id == user_id){
					html	+='<div id="pp2"><div id="chdiv-'+myChallenges[i].id+'" class="betCard mt-1">';
					html	+='<span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">'+myChallenges[i].cname+' </span></span>';
					html	+='<div class="d-flex pl-3"><div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>';
					html	+='<div class="global-rupee-icon"><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+myChallenges[i].amount+'</span></div></div>';
					html	+='<div><span class="betCard-subTitle">Prize</span><div><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+prize+'</span></div>';
					html	+='</div><button id="'+myChallenges[i].id+'-play" class="bg-secondary playButton cxy" onclick="playChallenge('+myChallenges[i].id+');">Play</button></div></div></div>';
				}else if(myChallenges[i].status == 2 && myChallenges[i].c_id == user_id){
					html	+='<div id="pp2"><div id="chdiv-'+myChallenges[i].id+'" class="betCard mt-1"><div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR';
					html	+='<img class="mx-1" src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt="">'+prize+'</span><div class="betCard-title d-flex align-items-center text-uppercase">';
					html	+='<span class="ml-auto" id="'+myChallenges[i].id+'-buttons"><button id="'+myChallenges[i].id+'-accept" class="btn btn-success px-3 btn-sm" style="cursor: pointer;float: left;width: 65px;height: 31px; " onclick="acceptChallenge('+myChallenges[i].id+')">START</button><button id="'+myChallenges[i].id+'-deny" class="btn btn-danger px-3 btn-sm" style="cursor: pointer;float: right;width: 72px;height: 31px;" onclick="denyChallenge('+myChallenges[i].id+')">REJECT</button>';
					html	+='</span></div></div><div class="py-1 row"><div class="pr-3 text-center col-5"><div class="pl-2"><img class="border-50" src="{{ asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div>';
					html	+='<div style="line-height: 1;"><span class="betCard-playerName">'+myChallenges[i].cname+'</span></div></div><div class="pr-3 text-center col-2 cxy">';
					html	+='<div><img src="{{ asset('front/images/vs.png')}}" width="30px" alt=""></div></div><div class="text-center col-5"><div class="pl-2">';
					html	+='<img class="border-50" src="{{ asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div><div style="line-height: 1;"><span class="betCard-playerName">'+myChallenges[i].oname+'</span></div></div></div></div></div>';
				}else if(myChallenges[i].status == 2 && myChallenges[i].o_id == user_id){
					html	+='<div id="pp2"><div id="chdiv-'+myChallenges[i].id+'" class="betCard mt-1"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">You </span></span>';
					html	+='<div class="d-flex pl-3"><div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span><div><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+myChallenges[i].amount+'</span></div></div>';
					html	+='<div><span class="betCard-subTitle">Prize</span><div><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+prize+'</span>';
					html	+='</div></div><button id="'+myChallenges[i].id+'-requested" class="bg-warning playButton cxy" onclick="cancelChallengeReq('+myChallenges[i].id+')">Requested</button></div></div></div>	';	
				}else if(myChallenges[i].status == 3 && myChallenges[i].o_id == user_id){
					html    +='<div id="pp2"><div id="chdiv-'+myChallenges[i].id+'" class="betCard mt-1"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">'+myChallenges[i].cname+' </span></span>';
					html    +='<div class="d-flex pl-3"><div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span><div><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+myChallenges[i].amount+'</span>';
					html    +='</div></div><div><span class="betCard-subTitle">Prize</span><div><img src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt=""><span class="betCard-amount">'+prize+'</span>';
					html    +='</div></div><button id="'+myChallenges[i].id+'-start-btn" class="bg-success playButton cxy" onclick="startChallenge('+myChallenges[i].id+')">START</button></div></div></div>';
				}
			}
			return html;
		}

		function setMyPlayChallenges(myPlayChallenges){
			var user_id	=	'{{Auth::user()->id}}';
			var html	=	'';
			for (let i = 0; i < myPlayChallenges.length; i++) {
				var prize = getPrizeAmount(myPlayChallenges[i].amount);
				html	+='<div id="pp2"><div class="betCard mt-1" id="myplaying-chdiv-'+myPlayChallenges[i].id+'" ><div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR';
				html	+='<img class="mx-1" src="{{ asset('front/images/global-rupeeIcon.png')}}" width="21px" alt="">'+prize+'</span><div class="betCard-title d-flex align-items-center text-uppercase">';
				html	+='<span class="ml-auto"><a href="https://apnaludo.com/challenge-detail/'+myPlayChallenges[i].id+'"  class="btn btn-info px-3 btn-sm" >View</a>	</span></div></div>';
				html	+='<div class="py-1 row"><div class="pr-3 text-center col-5"><div class="pl-2"><img class="border-50" src="{{ asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div>';
				html	+='<div style="line-height: 1;"><span class="betCard-playerName">'+myPlayChallenges[i].cname+'</span></div></div><div class="pr-3 text-center col-2 cxy">';
				html	+='<div><img src="{{ asset('front/images/vs.png')}}" width="30px" alt=""></div></div><div class="text-center col-5">';
				html	+='<div class="pl-2"><img class="border-50" src="{{ asset('front/images/author.svg')}}" width="21px" height="21px" alt=""></div>';
				html	+='<div style="line-height: 1;"><span class="betCard-playerName">'+myPlayChallenges[i].oname+'</span></div></div></div></div></div>';
			}
			return html;
		}
		
	</script>


@endsection

