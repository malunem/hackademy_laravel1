<x-html-layout>
    <x-slot name="page_title">Contattaci</x-slot>
    
    <x-slot name="page_content">
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <form class="form mt-5" method="POST" action="{{route('postMessage')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nome e cognome</label>
                            <input name="contact-fullname" value="{{old('contact-fullname')}}" type="text" class="custom-form">
                          </div>
                        <div class="mb-3">
                          <label class="form-label">Indirizzo email</label>
                          <input name="contact-email" value="{{old('contact-email')}}" type="email" class="custom-form">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Scrivi il tuo messaggio:</label>
                          <textarea name="contact-message" value="{{old('contact-message')}}" class="custom-form" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-html-layout>