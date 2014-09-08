<div style="width: 600px; margin: 0px auto;">

    <a href="/main">Home</a> | <a href="/main/create">Create new</a>

    <h1><?=$article->number;?></h1>
    <p><?=$article->id;?></p>
    <p>
        <a href="/main/edit/<?=$article->id;?>">Edit</a> |
        <a href="/main/delete/<?=$article->id;?>" onclick="return confirm('Удалить безвозвратно?')">Delete</a>
    </p>

   
    

</div>