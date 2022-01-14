<head>            
            <title>form</title>
            <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"></link>
            <link rel="stylesheet" href="{{ asset('/css/font-awesome.css') }}"></link>
            <link rel="stylesheet" href="{{ asset('/css/backend.css') }}"></link>

</head>
<body>
            <h1 class="text-center">Contact Me</h1>
			<div class="container">
            <form action="/form" method="POST" class="form">
               @csrf           
				   <input type="text"  name="name"  class="form-control" placeholder="Enter your name" autocomplete="off" required ='required'  />

                   <input type="email"  name="email"  required ='required' placeholder="Enter your email" class="form-control" />

                   <textarea class="form-control"  required ='required' placeholder="message" name ="message"></textarea>
                   
				   <input type="submit" value="Send" class="btn btn-success " />

            </form>
         </div>
