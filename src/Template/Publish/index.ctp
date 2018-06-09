<div class="col-md-12">
  <h1>Publica tu producto</h1>
</div>

<?php $templates = [
  'inputContainer' => '<div class="form-group">{{content}}</div>'
];
echo $this->Form->create(false, [
  'type' => 'file',
  'class' => 'form-horizontal'
]); ?>
<?php
echo $this->Form->control('name', [
  'type' => 'text',
  'label' => [
    'text' => 'Nombre del producto',
    'class' => 'col-md-2 control-label'
  ],
  'templates' => $templates
]) ;
echo $this->Form->control('price', [
  'type' => 'text',
  'label' => [
    'text' => 'Precio',
    'class' => 'col-md-2 control-label'
  ],
  'templates' => $templates
]) ;
echo $this->Form->submit('Publicar') ;
?>
<?php echo $this->Form->end(); ?>
