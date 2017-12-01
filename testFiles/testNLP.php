<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<script src="https://algorithmia.com/v1/clients/js/algorithmia-0.2.0.js" type="text/javascript"></script>
  </head>
  <body>
    <script>

    var input = {
      "document": "I really like Algorithmia!"
    };
    Algorithmia.client("simeqY772qhzCQkDtET++EUGeQv1")
        .algo("nlp/SentimentAnalysis/1.0.4")
        .pipe(input)
        .then(function(output) {
          console.log(output);
          document.write(output.result[0].sentiment);
        });


    </script>
  </body>
</html>
