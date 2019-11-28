<template>
  <div class="container mt-5" id="sign-in">
    <div class="row text-center">
      <div class="col-md-9 mx-auto">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="page-header header-filter quote">
                  <div class="container">
                    <div class="row text-center">
                      <div class="col-md-8 mx-auto">
                        <blockquote class="blockquote">
                          <p class="mb-0 ">Most of the time people don't know what they want until you show it to them.</p>
                          <footer class="blockquote-footer text-danger">Steve Jobs</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--sign in form-->
              <div class="col-md-6">
                <div class="text-center mt-5">
                  <h3 class="card-title">SIGN IN</h3>
                  <h5 class="card-title">&amp;</h5>
                  <p class="category text-muted">Asses KPI for your company now</p>
                </div>
                <form id="sign-in-form">
                  <!-- email -->
                  <div class="form-group mt-5">
                    <div class="input-group has-primary">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">
                          <i class="fas fa-envelope" />
                        </span>
                      </div>
                      <input type="email" class="form-control mr-3" placeholder="E-mail address" v-model.lazy="user.email">
                    </div>
                    <!-- <small class="form-text text-danger" v-if="error.field=='email'">{{error.message}}</small> -->
                  </div>

                  <!-- password -->
                  <div class="form-group mt-5">
                    <div class="input-group has-primary">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">
                          <i class="fas fa-lock-open" />
                        </span>
                      </div>
                      <input type="password" class="form-control mr-3" placeholder="Password" v-model.lazy="user.password">
                    </div>
                    <!-- <small class="form-text text-danger" v-if="error.field=='password'">{{error.message}}</small> -->
                  </div>
                  <button class="btn btn-raised btn-round mb-3 btn-sign-in">Sign In</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      user: {
        email: "",
        password: ""
      }
    };
  }
};
</script>


<style scoped>
/* #sign-in-img {
  position: relative;
  background-image: url("../../../public/images/kpi.jpg");
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
} */

/* .quote::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
  bottom: 0;
  left: 0;
  background-image: linear-gradient(to top right, rgb(64, 64, 64), black);
  opacity: 0.5;
} */

.quote {
  height: 100%;
  background: rgba(0, 0, 0);
}

.btn-sign-in {
  float: right;
  color: white;
  background: black;
  margin-right: 15px;
}

.btn-sign-in:hover {
  color: black;
  background: transparent;
}

.card .card-body {
  padding: 0;
}

.card-body {
  padding: 0;
}

.close-sign-in {
  float: right;
  margin: 10px;
}
</style>
