<!DOCTYPE html>
<html lang="en">
<head>
    <?php if(isset($title)): ?>
        <title>{{$title}}</title>
    <?php else: ?>
        <title>MeadLog</title>
    <?php endif; ?>
</head>
<body>
<div>This is the header</div>
<div>
    @section('content')
        There is no content defined.
    @show
</div>
</body>
</html>