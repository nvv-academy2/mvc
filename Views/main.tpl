{extends file='layout.tpl'}

{block name=body}
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active"><a href="/">All</a></li>
                {foreach $categories as $category}
                    <li role="presentation">
                        <a href="/category/show/{$category['id']}">{$category['name']}</a>
                    </li>
                {/foreach}
            </ul>
        </div>
        <div class="col-md-9">Content</div>
    </div>
{/block}