@extends('layouts.app')

@section('content')
    <section id="hero-section">

        <div class="container">
            <div class="row">

                <div class="col-6 my-auto">
                    <h2 class="text-light">Hello i'm</h2>
                    <h1 class="text-danger">Daniela Esposito </h1>
                    <h2 class="text-light">full stack developer</h2>
                </div>
                <div class="col-6">

                    <div class="photo-container"></div>

                </div>

            </div>
        </div>
    </section>
    <section id="about-me">
        <div class="container pt-5">
            <div class="row">
                <div class="col-6">
                    <div class="container-img">
                        immagine profilo
                        <img src="" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <span class="about-me">About me </span>
                    <h2 class="text-light">Who i am</h2>
                    <p class="text-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, recusandae quia
                        quos doloremque illo
                        quasi, voluptas sint ratione exercitationem mollitia soluta, aut odit molestias voluptatum? Labore
                        laboriosam odit beatae asperiores.
                        Voluptas iure maxime similique laborum odio! Perspiciatis, rerum itaque harum dignissimos ipsum ad.
                        Impedit adipisci asperiores placeat earum veniam cumque, facere quidem consequuntur, incidunt illo
                        quo, laborum recusandae molestiae illum?
                        Ducimus, quis eligendi sunt odio et odit amet esse nemo iste quia mollitia repudiandae harum atque
                        non reprehenderit architecto molestiae nisi modi expedita! Laudantium eum numquam neque,
                        consequuntur vel sit!</p>
                </div>
                <div class="col-12 text-center py-4">
                    <h2>My skils</h2>
                    <ul class="inline-block">
                        <li class="d-inline-block mx-3 text-light">HTML</li>
                        <li class="d-inline-block mx-3 text-light">CSS</li>
                        <li class="d-inline-block mx-3 text-light">JAVASCRIPT</li>
                        <li class="d-inline-block mx-3 text-light">BOOTSTRAP</li>
                        <li class="d-inline-block mx-3 text-light">REACT</li>
                        <li class="d-inline-block mx-3 text-light">NODE.JS</li>
                        <li class="d-inline-block mx-3 text-light">EXPRESS</li>
                        <li class="d-inline-block mx-3 text-light">PHP</li>
                        <li class="d-inline-block mx-3 text-light">LARAVEL</li>
                        <li class="d-inline-block mx-3 text-light">MYSQL</li>
                    </ul>
                </div>
                <div class="col-12 text-center">
                    <h3>Contact</h3>
                    link link link link
                </div>
            </div>
        </div>
    </section>
    <section id="last-project">
        <div class="container pt-5">
            <div class="row text-center">
                <div class="col-4">
                    progetti
                </div>
                <div class="col-4">
                    progetti
                </div>
                <div class="col-4">
                    progetti
                </div>

            </div>
        </div>
    </section>
@endsection
