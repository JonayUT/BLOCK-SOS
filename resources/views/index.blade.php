@extends('master')

@section('title', 'Block SOS')

@section('content')
    <div class="hero">
        <img alt="Block SOS Hero Image" height="100" src="https://storage.googleapis.com/a1aa/image/uUp8edJHe2hMvU9J66mh6sqjl2ByXMaOeDkxmlKnLQbLXrTnA.jpg" width="300"/>
    </div>
    <div class="content">
        <div class="support-section">
            <img alt="Support Image 1" height="300" src="https://storage.googleapis.com/a1aa/image/0qLkb1jnMfVbYysbrAwyfifLIQYHY4x78BffV5Z1I3TbctOdC.jpg" width="400"/>
            <img alt="Support Image 2" height="300" src="https://storage.googleapis.com/a1aa/image/b5S6zmXeuvUGW6gXmep7qY7cUR2KWk8SaxfVdeThyMAguWnOB.jpg" width="400"/>
        </div>
        <h2>APOYOS REALIZADOS</h2>
        <p style="text-align: center;">GRACIAS A TI</p>
        <div class="support-list">
            <div class="support-item">
                <img alt="Support Example Image" height="50" src="https://storage.googleapis.com/a1aa/image/8MTwVdjwh1oOARDUCeeTfavD8Ak8nMZiA0fZjf4NW4wLdtOdC.jpg" width="50"/>
                <div>
                    <h3>Ejemplo1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum posuere, gravida, scelerisque, et eros.</p>
                </div>
            </div>
            <div class="support-item">
                <img alt="Support Example Image" height="50" src="https://storage.googleapis.com/a1aa/image/8MTwVdjwh1oOARDUCeeTfavD8Ak8nMZiA0fZjf4NW4wLdtOdC.jpg" width="50"/>
                <div>
                    <h3>Ejemplo2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum posuere, gravida, scelerisque, et eros.</p>
                </div>
            </div>
            <div class="support-item">
                <img alt="Support Example Image" height="50" src="https://storage.googleapis.com/a1aa/image/8MTwVdjwh1oOARDUCeeTfavD8Ak8nMZiA0fZjf4NW4wLdtOdC.jpg" width="50"/>
                <div>
                    <h3>Ejemplo3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum posuere, gravida, scelerisque, et eros.</p>
                </div>
            </div>
            <!-- Repetir para más ejemplos -->
        </div>
        <div class="mission-vision">
            <div>
                <h3>Misión</h3>
                <p>Nuestra misión es facilitar y optimizar el proceso de donaciones a través de la tecnología blockchain...</p>
            </div>
            <div>
                <h3>Visión</h3>
                <p>Aspiramos a ser la plataforma líder de donaciones a nivel global, reconocida por su innovación...</p>
            </div>
        </div>
        <div class="values">
            <h3>Valores</h3>
            <ol>
                <li><strong>Transparencia:</strong> Fomentamos un entorno donde cada donación se realiza de manera clara...</li>
                <li><strong>Innovación:</strong> Utilizamos la tecnología blockchain para mejorar los procesos de donación...</li>
                <!-- Repetir para más valores -->
            </ol>
        </div>
    </div>
@endsection
