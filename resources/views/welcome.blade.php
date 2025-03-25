@extends('layouts.app')
@section('title-page', 'Portfolio - Benvenuto')
@section('content')
    <section id="hero" class="py-5 text-center position-relative">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 text-lg-start text-center mb-4 mb-lg-0">
                    <h1 class="display-4 fw-bold text-light mb-4">Ciao, sono <span class="text-primary">Nome Cognome</span>
                    </h1>
                    <p class="lead text-light mb-4">Sviluppatore Web Full Stack specializzato in Laravel e tecnologie moderne
                    </p>
                    <div class="d-flex justify-content-lg-start justify-content-center gap-3">
                        <a href="#progetti" class="btn btn-custom">Visualizza Progetti</a>
                        <a href="#contatti" class="btn btn-outline-light">Contattami</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/img-profilo3.jpg') }}" alt="Profilo" class="img-fluid rounded-circle"
                        style="max-width: 350px;">
                </div>
            </div>
        </div>
    </section>

    <section id="competenze" class="py-5 bg-dark">
        <div class="container">
            <h2 class="text-center text-light mb-5">Le Mie Competenze</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 bg-transparent text-light border-primary">
                        <div class="card-body text-center">
                            <i class="fas fa-code fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title">Sviluppo Web</h3>
                            <p class="card-text">Esperienza con HTML, CSS, JavaScript, PHP e framework moderni come Laravel
                                e Vue.js</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 bg-transparent text-light border-primary">
                        <div class="card-body text-center">
                            <i class="fas fa-database fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title">Database</h3>
                            <p class="card-text">Competenze in progettazione e ottimizzazione di database MySQL, PostgreSQL
                                e MongoDB</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 bg-transparent text-light border-primary">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title">Responsive Design</h3>
                            <p class="card-text">Creazione di interfacce utente responsive e accessibili per tutti i
                                dispositivi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="progetti" class="py-5">
        <div class="container">
            <h2 class="text-center text-light mb-5">Progetti Recenti</h2>
            <div class="text-center mb-4">
                <a href="{{ route('posts.index') }}" class="btn btn-custom">Visualizza Tutti i Progetti</a>
            </div>
        </div>
    </section>

    <section id="contatti" class="py-5 bg-dark">
        <div class="container">
            <h2 class="text-center text-light mb-5">Contattami</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-transparent text-light">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nome</label>
                                    <input type="text" class="form-control bg-transparent text-light" id="name"
                                        placeholder="Il tuo nome">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control bg-transparent text-light" id="email"
                                        placeholder="La tua email">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Messaggio</label>
                                    <textarea class="form-control bg-transparent text-light" id="message" rows="5" placeholder="Il tuo messaggio"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-custom">Invia Messaggio</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
