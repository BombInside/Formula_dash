<div style="width: 600px; margin: 0px auto;">

    Home | <a href="/main/create">Create new</a>

    <?php if($data->num_rows() > 0): ?>

        <?php foreach($data->result() as $i): ?>

            <h1>
                <a href="/main/article/<?=$i->article_id;?>"><?=$i->article_title;?></a>
            </h1>
            <p><?=$i->article_text;?></p>
            <p>
                <a href="/main/edit/<?=$i->article_id;?>">Edit</a> |
                <a href="/main/delete/<?=$i->article_id;?>" onclick="return confirm('Удалить безвозвратно?')">Delete</a>
            </p>
            <hr>

        <?php endforeach; ?>

    <?php endif; ?>

</div>