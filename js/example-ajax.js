(function (Drupal, $) {
    Drupal.behaviors.exampleAjax = {
        attach: function (context) {
            $('#example-api-button', context).once('exampleAjax').on('click', function () {
                $.get('/api/example', function (data) {
                    $('#example-api-output').text(
                        data.title + ' (enabled: ' + data.enabled + ')'
                    );
                });
            });
        }
    };
})(Drupal, jQuery);
