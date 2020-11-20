bannerSwiper();
LicenseSwiper();
regesterSwiper();
dataTable();






function bannerSwiper() {
    var swiper1 = new Swiper('.banner-swiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}

function LicenseSwiper() {

    var swiper2 = new Swiper('.License-swiper', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.License-swiper-button-next',
            prevEl: '.License-swiper-button-prev',
        },
        breakpoints: {

            550: {
                slidesPerView: 2,
            },
            800: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
            1260: {
                slidesPerView: 5,
            },

        }
    });
}

function regesterSwiper() {

    var swiper3 = new Swiper('.swiper-container-h', {
        effect: 'flip',
        grabCursor: true,
        navigation: {
            nextEl: '.new-user',
            prevEl: '.old-user',
        },
    });
    var swiper4 = new Swiper('.swiper-container-v', {
        effect: 'flip',
        direction: 'vertical',
        // grabCursor: true,
        navigation: {
            nextEl: '.forgot-pass',
            prevEl: '.try-again',
        },
    });
}

function dataTable() {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');

}



$('.count').prop('disabled', true);
$(document).on('click', '.plus', function() {
    $('.count').val(parseInt($('.count').val()) + 1);
});
$(document).on('click', '.minus', function() {
    $('.count').val(parseInt($('.count').val()) - 1);
    if ($('.count').val() == 0) {
        $('.count').val(1);
    }
});


function removeElementFromTable() {
    const $tableID = $('#table');
    const $BTN = $('#export-btn');
    const $EXPORT = $('#export');

    const newTr = `
<tr class="hide">
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half">
    <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
  </td>
  <td>
    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
  </td>
</tr>`;

    $('.table-add').on('click', 'i', () => {

        const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

        if ($tableID.find('tbody tr').length === 0) {

            $('tbody').append(newTr);
        }

        $tableID.find('table').append($clone);
    });

    $tableID.on('click', '.table-remove', function() {

        $(this).parents('tr').detach();
    });

    $tableID.on('click', '.table-up', function() {

        const $row = $(this).parents('tr');

        if ($row.index() === 0) {
            return;
        }

        $row.prev().before($row.get(0));
    });

    $tableID.on('click', '.table-down', function() {

        const $row = $(this).parents('tr');
        $row.next().after($row.get(0));
    });

    // A few jQuery helpers for exporting only
    jQuery.fn.pop = [].pop;
    jQuery.fn.shift = [].shift;

    $BTN.on('click', () => {

        const $rows = $tableID.find('tr:not(:hidden)');
        const headers = [];
        const data = [];

        // Get the headers (add special header logic here)
        $($rows.shift()).find('th:not(:empty)').each(function() {

            headers.push($(this).text().toLowerCase());
        });

        // Turn all existing rows into a loopable array
        $rows.each(function() {
            const $td = $(this).find('td');
            const h = {};

            // Use the headers from earlier to name our hash keys
            headers.forEach((header, i) => {

                h[header] = $td.eq(i).text();
            });

            data.push(h);
        });

        // Output the result
        $EXPORT.text(JSON.stringify(data));
    });

}