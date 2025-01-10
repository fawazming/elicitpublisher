<h2 class="title text-center">Our Journals</h2>
            <div class="row home-info-block-first" style="display: flex; justify-content: center; flex-wrap: wrap;">
                <?php foreach ($journals as $journal):?>
                <div class="col-md-3 col-sm-6">
                    <a href="<?=base_url()?>journal/<?=$journal->id?>">
                        <article class="sabbi-thumlinepost-card solitude-bg__x">
                            <figure class="sabbi-thumlinepost-card-figure">
                                <img src="https://journal.elicitpublisher.com/public/journals/<?=$journal->id?>/<?=$journal->journalThumbnail->en->uploadName?>" alt="" class="img-responsive img-thumpost">
                            </figure>
                            <div class="sabbi-thumlinepost-card-meta">
                                <h2 class="meta-title ht-5"><?=$journal->name->en?></h2>
                                <p class="meta-text"></p>
                                <!-- <a href="#" class="btn btn-unsolemn btn-action read-more">Read More</a> -->
                            </div>
                        </article>
                    </a>
                    
                </div>
                <?php endforeach; ?>
            </div>