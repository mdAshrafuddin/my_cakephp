<section class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card">
            <div class="card-body p-5">
            <h2 class="text-uppercase mb-2">Add method</h2>
                <?= $this->Html->link('Users', '/users',['class' => 'btn btn-outline-primary'])?>
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

                <div class="d-flex">
                    <?= $this->Form->button('Add', ['class' => 'btn btn-success btn-block btn-lg gradient-custom-4 text-body']);?>
                </div>

                <?= $this->Form->end() ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>