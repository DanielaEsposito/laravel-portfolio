@extends('layouts.app')

@section('content')
    <section id="hero-section">

        <div class="containe">
            <div class="row ">

                <div class="col-6">
                    <div class="pt-5 ms-5">

                        <h2 class="text-light ms-5 ps-3">Hello i'm</h2>
                        <h1 class="title-dashboard ms-5 ps-3">Daniela Esposito </h1>
                        <h2 class="text-light big-line ms-5 ps-3">Full Stack Developer</h2>
                    </div>
                </div>
                <div class="col-6 photo-container">



                </div>

            </div>
        </div>
    </section>
    <section id="about-me">
        <div class="container pt-5">
            <div class="row">
                <div class="col-5">
                    <div class="container-img">

                        <img src="{{ asset('images/img-profilo3.jpg') }}" alt="Immagine profilo" class="img-profile">
                    </div>
                </div>
                <div class="col-7 ">
                    <div class="background background-about-me">

                        <h5 class="small-line fw-bold">ABOUT ME </h5>
                        <h2 class="text-light">Who am i</h2>
                        <p class="text-light">Ciao, sono Daniela Esposito!
                            La mia passione per lo sviluppo web è nata come un hobby e si è trasformata in un vero obiettivo
                            professionale. Con un background in oreficeria e design, porto nel coding la stessa attenzione
                            ai
                            dettagli e creatività.

                            Dopo esperienze lavorative e di volontariato che mi hanno insegnato empatia, lavoro di squadra e
                            gestione dello stress, ho approfondito il mondo tech con il corso Boolean. Oggi ho competenze in
                            <strong>HTML, CSS, JavaScript, Bootstrap, React, Node.js, Express</strong> e mi sto
                            specializzando
                            in <strong>PHP e LARAVEL</strong> .

                            Amo trasformare idee in realtà attraverso il codice e sono sempre alla ricerca di nuove
                            tecnologie
                            da esplorare. Il mio obiettivo? Crescere come sviluppatrice e affrontare progetti sempre più
                            stimolanti!

                        </p>


                        <button class="btn btn-custom mt-3">Vedi il mio curriculum</button>

                    </div>

                </div>
                <div class="background mt-5">

                    <div class="col-12 ">
                        <h5 class="small-line fw-bold text-start ms-5 ps-2  ">MY SKILLS</h5>
                        <h2 class="text-light mb-5 ms-5 ps-2 ">Languages ​​& Frameworks</h2>
                        <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-2 wrap text-center">
                            <div class="col">
                                <div class="language-container skills-items">
                                    <p>HTML</p>
                                    <div class="line">
                                        <div class="colored-line html"></div>
                                    </div>
                                    <p class="mt-2">98%</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="language-container skills-items">
                                    <p>CSS</p>
                                    <div class="line">
                                        <div class="colored-line css"></div>
                                    </div>
                                    <p class="mt-2">97%</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="language-container skills-items">
                                    <p>JAVASCRIPT</p>
                                    <div class="line">
                                        <div class="colored-line javascript"></div>
                                    </div>
                                    <p class="mt-2">80%</p>
                                </div>
                            </div>
                            <div class="colp">
                                <div class="language-container skills-items">
                                    <p>BOOTSTRAP</p>
                                    <div class="line">
                                        <div class="colored-line bootstrap"></div>
                                    </div>
                                    <p class="mt-2">80%</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="language-container skills-items">
                                    <p>REACT</p>
                                    <div class="line">
                                        <div class="colored-line react"></div>
                                    </div>
                                    <p class="mt-2">70%</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="language-container skills-items">
                                    <p>NODE.JS</p>
                                    <div class="line">
                                        <div class="colored-line node"></div>
                                    </div>
                                    <p class="mt-2">70%</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="language-container skills-items">
                                    <p>EXPRESS</p>
                                    <div class="line">
                                        <div class="colored-line express"></div>
                                    </div>
                                    <p class="mt-2">70%</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="language-container skills-items">
                                    <p>PHP</p>
                                    <div class="line">
                                        <div class="colored-line php"></div>
                                    </div>
                                    <p class="mt-2">60%</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="language-container skills-items">
                                    <p>LARAVEL</p>
                                    <div class="line">
                                        <div class="colored-line laravel"></div>
                                    </div>
                                    <p class="mt-2">60%</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="language-container skills-items">
                                    <p>MYSQL</p>
                                    <div class="line">
                                        <div class="colored-line mysql"></div>
                                    </div>
                                    <p class="mt-2">60%</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="last-project">
        <div class="container pt-5">
            <div class="d-flex justify-content-between align-items-md-center mb-5">

                <div>
                    <h5 class="small-line fw-bold ">SOME OF MY PROJECTS</h5>
                    <h2 class="text-light ">My Last project</h2>
                </div>
                <div>
                    <h5 class="text-light">Guarda tutti i progetti</h5>
                    <a href="{{ route('posts.index') }}" class="btn btn-custom text-center">Vedi Progetti</a>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-4 text-center ">
                        <div class="card bg-transparent  text-light mx-auto" style="width: 18rem;">
                            <img src="{{ asset($post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <h5 class="author">{{ $post->author }}</h5>
                                <p class="card-text">{{ $post->content }}</p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-custom">Vedi Progetto</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">

            <div class="col-12 py-4">
                <div class="background">

                    <h3 class="text-light">Contact</h3>
                    <span class="text-white">Link</span>
                    <span class="text-white">Link</span>
                    <span class="text-white">Link</span>
                </div>

            </div>
        </div>
    </section>
@endsection
