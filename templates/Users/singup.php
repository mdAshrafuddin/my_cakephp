<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <?= $this->Form->create() ?>

                <div class="form-outline mb-4">
                    <?= $this->Form->control('name', ['class'=>'form-control form-control-lg'])?>
                </div>

                <div class="form-outline mb-4">
                    <?= $this->Form->control('email', ['class'=>'form-control form-control-lg'])?>
                </div>

                <div class="form-outline mb-4">
                    <?= $this->Form->control('phone', ['type' => 'number','class'=>'form-control form-control-lg'])?>
                </div>

                <div class="form-outline mb-4">
                    <?= $this->Form->control('password', ['class'=>'form-control form-control-lg'])?>
                </div>

                <div class="form-outline mb-4">
                  <?=  $this->Form->select(
                    'field',
                    ['Active', 'InActive'],
                    ['class'=>'form-select']
                  );?>
                </div>

                <div class="d-flex justify-content-center">
                    <?= $this->Form->button('Sing up', ['class' => 'btn btn-success btn-block btn-lg gradient-custom-4 text-body']);?>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? 
                <?= $this->Html->link('Login here', '/users/login',['class' => 'fw-bold text-body']) ?>    

                <?= $this->Form->end() ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>