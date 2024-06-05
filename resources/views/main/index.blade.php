@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Клиника "Будьте здоровы"</h1>

        <section class="featured-posts-section">
                <div class="row">
                    @foreach($doctors as $doctor)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ asset('storage/' . $doctor->doctor_image)}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">{{ $doctor->speciality->speciality_title }}</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $doctor->doctor_surname . " " . $doctor->doctor_name . " " . $doctor->doctor_middlename }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>

        </div>
    </div>

</main>
@endsection
