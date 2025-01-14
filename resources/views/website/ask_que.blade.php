<div class="container">
    <h4 class="dv_fre_ask_heading">{!! $get_data_section_10->description !!}</h4>
    <div class="row">
        <div class="col-md-12">
            <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
                <?php foreach (json_decode($get_data_section_10->point_wise_details) as $index => $content): ?>
                    <?php
                    // Split the question and answer using the colon `:` separator
                    // Add a fallback in case the split fails (to prevent errors)
                    list($question, $answer) = explode(':', $content, 2) + [null, null];
                    ?>
                    <div class="panel panel-default">
                        <div role="tab" id="heading<?= $index + 1 ?>" class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse<?= $index + 1 ?>" aria-expanded="false"
                                   aria-controls="collapse<?= $index + 1 ?>" class="collapsed dv_accodion">
                                     <?= htmlspecialchars($question) ?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse<?= $index + 1 ?>" role="tabpanel"
                             aria-labelledby="heading<?= $index + 1 ?>" class="panel-collapse collapse">
                            <div class="panel-body dv_accodion_body">
                                <?= nl2br(htmlspecialchars($answer)) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Add Bootstrap and jQuery if they are not included already -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
