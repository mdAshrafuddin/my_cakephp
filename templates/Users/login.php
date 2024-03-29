<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
            <?= $this->Flash->render() ?>
              <h2 class="text-uppercase text-center mb-5">Log in</h2>

              <?= $this->Form->create() ?>

                <div class="form-outline mb-4">
                    <?= $this->Form->control('name', ['class'=>'form-control form-control-lg'])?>
                  <!-- <input type="email" class="form-control form-control-lg" />
                  <label class="form-label">Your Email</label> -->
                </div>

                <div class="form-outline mb-4">
                    <?= $this->Form->control('password', ['class'=>'form-control form-control-lg'])?>
                  <!-- <input type="password" class="form-control form-control-lg" /> -->
                  <!-- <label class="form-label">Password</label> -->
                </div>

                <div class="d-flex justify-content-center">
                    <?= $this->Form->submit('login', ['class' => 'btn btn-success btn-block btn-lg gradient-custom-4 text-body']);?>
                  <!-- <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Log in</button> -->
                </div>

                <?= $this->Form->end() ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>