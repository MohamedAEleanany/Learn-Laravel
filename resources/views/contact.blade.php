<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f8f9fa;
    }
    .form-container {
      width: 100%;
      max-width: 500px;
      padding: 30px;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h3 class="text-center mb-4">Contact Us</h3>

    <form method="post" action="{{ route('contact.store') }}">
      @csrf

      @if($errors->any())
        <div>
          <ul>
            @foreach ($errors->all() as $error)
              <li style="color: red"> {{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="row mb-3">
        <div class="col">
          <label class="form-label">First Name</label>
          <input type="text" class="form-control" placeholder="Enter first name" name="first_name" value="{{ old('first_name') }}">
          @error('first_name')
            <span style="color: red">{{ $message }}</span>
          @enderror
        </div>
        <div class="col">
          <label class="form-label">Last Name</label>
          <input type="text" class="form-control" placeholder="Enter last name" name="last_name" value="{{ old('last_name') }}">
          @error('last_name')
          <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="text" class="form-control" placeholder="Enter email" name="email" value="{{ old('email') }}">
        @error('email')
          <span style="color:red;">{{$message }}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea class="form-control" rows="4" placeholder="Write your message..." name="message"> {{ old('message') }}</textarea>
        @error('message')
          <span style="color:red;">{{ $message }}</span>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary w-100">Send Message</button>
    </form>
  </div>

</body>
</html>