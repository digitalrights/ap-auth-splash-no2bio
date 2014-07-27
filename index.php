<!DOCTYPE html>
<html lang="he" xml:lang="he" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>אומרים לא למאגר הביומטרי</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.min.css">
<!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
<!--    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">-->
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div id="main-container">
      <header id="main-header">
        <img src="img/biodb_danger_danger.png" alt="ידיעות אחרונות - מדענים: המאגר מסוכן" class="img-responsive">
      </header>
      <section>
        <div>
          <p>
            אזרחי ישראל,<br>
            אל תצטרפו למאגר הביומטרי!
          </p>
          <p>
            היזהרו! בביקורכם מיד במשרד הפנים יבקשו מכם למסור את טביעת האצבע בתמורה לתעודת זהות חכמה, במטרה להכניס אתכם למאגר הביומטרי, אשר יסכן אתכם ואת בטחונכם.<br>
            דעו:<br>
          </p>
          <ol>
            <li>החוק קובע שאין שום חובה להצטרף למאגר הביומטרי.</li>
            <li>החוק קובע כי אסור לפגוע בזכויותיו של מי שיסרב להצטרף למאגר הביומטרי.</li>
            <li>החוק קובע כי אם נכנסתם למאגר לא תוכלו לצאת! אל תחסכו וגשו להצטלם, בטרם תנפיקו דרכון או תעודת זהות.</li>
          </ol>
        </div>
        <div class="text-center">
          <form action="/login" method="post">
            <input type="hidden" id="authenticators" name="authenticator" value="apAuthSplashOnly">
            <input type="submit" class="btn btn-success" name="submit[apAuthSplashOnlyConnect]" value="להמשך גלישה">
          </form>
        </div>
      </section>
      <footer>
      </footer>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>