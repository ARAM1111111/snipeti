<?php

//href="{{route('page',['alias'=>$page->alias])}}" <======> '/page/{id}'

//{{method_field('delete')}}
// {{csrf_field()}}

// ================================== MAIL ==========================================
// MAIL_DRIVER=mail
// use Mail
// 			$data = $request->all();
//     		$res = Mail::send('site.emeil',['data'=>$data],function($m)use ($data){
//     			$mail_admin = env('MAIL_ADMIN');
//     			$m->from($data['email'],$data['name']);
//     			$m->to($mail_admin)->subject('QUESTION');
//     		});

//     		if($res){
//     			return redirect()->route('home')->with('status','EMEIL SENDED');
//     		}


					// +++++ MAILGAN+++++
	// MAIL_DRIVER=mailgun
	// MAILGUN_DOMAIN=active i kod@
	// MAILGUN_SECRET= glavniyum tak@  API Keys->secret api key
	
	// laravel.com -ic Driver Prerequisites ---> composer require guzzlehttp/guzzle
	// vendor/guzzle/src/Client.php um 	'verify' => false, sarqel
	// Mail::send('site.email',$data,function($m){
 	//    			$m->to('aram1111111@mail.ru','Aram');
 	//    		});
	// site.email -@ shablonn e mej@ {{$email}} datai meji anunnern a aftomat

					// ++++++++++++++++++


				// ++++++++ LARAVEL 5.4 MAIL +++++++++++
	// PORCARKMAN LAV SAIT mailtrap.io
	// 1. php artisan make:mail welcome //<-anun Kstexcvi 
											// app/http/controllers/mail/welcome.php
	// 2. Indexcontrollerum Mail::to(env('MAIL_ADMIN'))->send(new welcome($data));
			// CHMORANAL 	use Mail;
			// 			use App\Mail\OrderShipped;
			// 			use App\Mail\welcome;
	// 3  welcome.php um
					// public $data;
				    // public function __construct($data)
				    // {
				    //     $this->data = $data;
				    // }

				    //  public function build()
				    // {
				    //     return $this->view('site.welcome');
				    // }
				// ++++++++++++++++++++++++++++++++++++++
// ==================================================================================

// =================================== SESSION && ERRORS ============================

 // @if(session('status'))
 //      <div class="alert alert-success">
 //        {{session('status')}}
 //      </div>
 //    @endif
     
 //    @if(count($errors)>0)
 //         <div class="alert alert-danger">
 //          <ul>
 //            @foreach($errors->all() as $err)
 //               <li>{{$err}}</li>
 //            @endforeach
 //          </ul>
 //      </div>
 //    @endif
// =====================================================================================

// ========================== LARAVEL COLLECTIVE FORMS ================================
// //{!! Html::image('public/assets/img/'.$page->images,'alt',array('class'=>'zoomIn'!!}

// // {!!Html::link(route('pagesEdit',['page'=>$page->id]),$page->name,['alt'=>$page->name])!!}

// // {!!Form::open(['url'=>route('pagesEdit',['page'=>$page->id]),'class'=>'form-horizontal','method'=>'post'])!!}
// //         {{-- {!! Form::hidden('_method','delete') !!} --}}
// //         {{method_field('DELETE')}}
// //         {!! Form::button('DELETE',['class'=>'btn btn-danger','type'=>'submit']) !!}
// // {!! Form::close() !!}

// ====================================================================================


// ====================== FORMA ORINAK =============================================

// <div class="wrapper container-fluid">

// 	{!! Form::open(['url' => route('pagesAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
// 	<div class="form-group">
		
// 		{!! Form::label('name','Название',['class' => 'col-xs-2 control-label'])   !!}
// 		<div class="col-xs-8">
// 			{!! Form::text('name',old('name'),['class' => 'form-control','placeholder'=>'Введите название страницы'])!!}
// 		</div>
	
// 	</div>
    
   //  <div class="form-group">
	  //    {!! Form::label('text', 'Текст:',['class'=>'col-xs-2 control-label']) !!}
	  //    <div class="col-xs-8">
		 // 	{!! Form::textarea('text', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
		 // </div>
   //  </div>
    
//     <div class="form-group">
// 	     {!! Form::label('images', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
// 	     <div class="col-xs-8">
// 		 	{!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
// 		 </div>
//     </div>
    
    
//       <div class="form-group">
// 	    <div class="col-xs-offset-2 col-xs-10">
// 	      {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
// 	    </div>
// 	  </div>
	
	
	
// 	{!! Form::close() !!}
	
// 	<script>
// 		CKEDITOR.replace('editor');
// 	</script>
	
// </div>

// ================================================================================


// ==================== IMG UPLOAD ================================

	// if($request->hasFile('images')){
 //            $file = $request->file('images');
 //            $input['images'] = $file->getClientOriginalName('images');
 //            $file->move(public_path().'/assets/images',$input['images']);

// ================================================================


// ==================== MODEL + MIGRATION ================================
	// php artisan make:model name -m (-r -c)
// ================================================================

// ==================== LARAVEL REST ================================
	// php artisan make:controller BlogController --resource
	// Route::resource("blog","BlogController"); 

	// adding => blog.create -> blog.store -> blog.index
	// del =>  blog.destroy -> blog.index
	// upd =>  blog.edit -> blog.update -> blog.index
// ================================================================


// ==================== NO-CAPCHA ================================
	// https://github.com/anhskohbo/no-captcha

	// https://www.google.com/recaptcha/admin#list vercnel menak keyer@

	// vendor/guzzle/src/Client.php um 	'verify' => false, sarqel ==>for cURL error 60: SSL certificate
// ================================================================
?>