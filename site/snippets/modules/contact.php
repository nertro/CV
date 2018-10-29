<div class="m-contact">
    <table>
        <tr class="m-contact__row">
            <td class="m-contact__title">Name:</td>
            <td class="m-contact__data"><?= $site->title()->html() ?></td>
        </tr>
        <tr class="m-contact__row">
            <td class="m-contact__title">E-Mail:</td>
            <td class="m-contact__data"><a href="#"><?= $site->mail()->html() ?></a></td>
        </tr>
        <tr class="m-contact__row">
            <td class="m-contact__title">Geburtstag:</td>
            <td class="m-contact__data"><?= $site->birthday()->html() ?></td>
        </tr>
        <tr class="m-contact__row">
            <td class="m-contact__title">Instagram:</td>
            <td class="m-contact__data"><a href="#">@nertro</a>,<a href="#">@nertro</a></td>
        </tr>
    </table>
</div>