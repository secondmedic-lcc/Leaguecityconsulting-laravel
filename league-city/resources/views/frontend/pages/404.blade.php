<style>
    
    header, footer {
      display: none;
    }

    body {
        margin: 0;
    }
    .text-center {
        text-align: center !important
    }

.error-page-area {
  position: relative;
  z-index: 1;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.error-page-area .shape-left {
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  height: 100%;
  width: 20%;
  background-position: left !important;
  background-repeat: no-repeat !important;
  z-index: -1;
  opacity: 0.3;
  background-size: contain !important;
}

.error-page-area .shape-right {
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  height: 100%;
  width: 20%;
  background-position: right !important;
  background-repeat: no-repeat !important;
  z-index: -1;
  opacity: 0.3;
  background-size: contain !important;
}

.error-box h1 {
  font-size: 150px;
  line-height: 110px;
  font-weight: 800;
  margin-bottom: 40px;
  text-shadow: 3px 3px #c0c0c0;
}

.error-box h2 {
  font-weight: 700;
  margin-bottom: 20px;
}

.error-box p {
  padding: 0 10%;
  font-size: 18px;
  line-height: 28px;
  
}

.error-page-area .btn {
  width: 210px;
  margin: 30px auto 0;
  padding: 0;
  background-color: #de2f2f;
  color: white;
  text-decoration: none;
  font-size: 17px;
  font-weight: 600;
  border-radius: 30px;
  height: 45px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.error-page-area .btn i {
  margin-right: 10px;
}

/* 404 work end */
</style>


<section class="error-page-area text-center">
    <div class="shape-left" style="background: url({{asset('includes-frontend/images/44-left.png')}});"></div>
    <div class="shape-right" style="background: url({{asset('includes-frontend/images/44-right.png')}});"></div>
    <div class="container">
        <div class="error-box">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>404</h1>
                    <h2>Sorry Page Was Not Found!</h2>
                    {{-- <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam voluptatum sed vel soluta deleniti dolor velit iure, debitis odio incidunt quidem sit obcaecati rem tempora ullam consectetur unde dicta cum.
                    </p> --}}
                    <a class="btn" href="/"><i class="fas fa-home"></i> Back to home</a>
                </div>
            </div>
        </div>
    </div>
</section>