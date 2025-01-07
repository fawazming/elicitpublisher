    <header class="sabbi-page-header" style="margin-top: 215px;min-height: auto;">
        <div class="page-header-content conternt-center"> 
            <div class="header-title-block" style="margin-bottom: 30px;background-color: rgba(28, 211, 0, 0.7);">
                <h1 class="page-title"><?=$pg[0]['setting_value']?></h1>
            </div>
        </div>
    </header>
    <section class="sabbi-section stage-future_member">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 px-10">
                <?=$pg[1]['setting_value']?>
            </div>
            <aside class="col-sm-3">
                <a href="<?=base_url('plagiarism-policies')?>" class="btn btn-gules docs-creator btn-block">Plagiarism Policies</a>
                <a href="<?=base_url('publication-ethics')?>" class="btn btn-gules docs-creator btn-block">Publication Ethics</a>
                <a href="<?=base_url('editors-responsibilities')?>" class="btn btn-gules docs-creator btn-block">Editors' Responsibilities</a>
                <a href="<?=base_url('authors-duties')?>" class="btn btn-gules docs-creator btn-block">Authors' Duties</a>
                <a href="<?=base_url('reviewers-duties')?>" class="btn btn-gules docs-creator btn-block">Reviewers' Duties</a>
                <a href="<?=base_url('instructions-for-authors')?>" class="btn btn-gules docs-creator btn-block">Instructions for Authors</a>
                <a href="<?=base_url('article-policies')?>" class="btn btn-gules docs-creator btn-block">Article Policies</a>
                <a href="<?=base_url('editing-services')?>" class="btn btn-gules docs-creator btn-block">Editing Services</a>
                <a href="<?=base_url('peer-review-policy')?>" class="btn btn-gules docs-creator btn-block">Peer Review Policy</a>
                <a href="<?=base_url('default')?>" class="btn btn-gules docs-creator btn-block">Default (404 Not Found)</a>
            </aside>
        </div>
    </div>
    </section><!-- /.stage-future_member -->
    