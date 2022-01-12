<section class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card">
            <div class="card-body p-5">
              <h2 class="text-uppercase mb-5">Edit Method</h2>

              <?= $this->Form->create($student) ?>

                <div class="form-outline mb-4">
                    <?= $this->Form->control('name', ['label' => 'Your Name', 'class' => 'form-control form-control-lg']);?>
                </div>

                <div class="form-outline mb-4">
                    <?= $this->Form->control('email', ['label' => 'Your email', 'class' => 'form-control form-control-lg'])?>
                </div>

                <div class="form-outline mb-4">
                    <?= $this->Form->control('phone', ['label' => 'Your Phone', 'class' => 'form-control form-control-lg']) ?>
                </div>

                <?= $this->Form->button('Edit', ['class' => 'btn btn-success btn-block btn-lg gradient-custom-4 text-body']) ?>

                <?= $this->Form->end() ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>