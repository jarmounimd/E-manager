$(document).ready(function() {
    // Function to check if DataTable is already initialized
    function initializeDataTable(selector, options) {
        if (!$.fn.DataTable.isDataTable(selector)) {
            return $(selector).DataTable(options);
        }
        return $(selector).DataTable();
    }

    // Common DataTable options with paging and ordering disabled
    const commonOptions = {
        scrollCollapse: true,
        autoWidth: false,
        responsive: true,
        paging: false, // Disable paging
        ordering: false, // Disable ordering
        columnDefs: [{
            targets: "datatable-nosort",
            orderable: false,
        }],
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        language: {
            info: "_START_-_END_ of _TOTAL_ entries",
            searchPlaceholder: "Search",
            paginate: {
                next: '<i class="ion-chevron-right"></i>',
                previous: '<i class="ion-chevron-left"></i>'
            }
        }
    };

    // Initialize DataTables with the common options
    initializeDataTable('.data-table', commonOptions);

    initializeDataTable('.data-table-export', $.extend({}, commonOptions, {
        dom: 'Bfrtp',
        buttons: ['copy', 'csv', 'pdf', 'print']
    }));

    var table = initializeDataTable('.select-row', commonOptions);

    $('.select-row tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

    var multipletable = initializeDataTable('.multiple-select-row', commonOptions);

    $('.multiple-select-row tbody').on('click', 'tr', function() {
        $(this).toggleClass('selected');
    });

    var checkboxTable = initializeDataTable('.checkbox-datatable', $.extend({}, commonOptions, {
        columnDefs: [{
            targets: 0,
            searchable: false,
            orderable: false,
            className: 'dt-body-center',
            render: function(data, type, full, meta) {
                return '<div class="dt-checkbox"><input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '"><span class="dt-checkbox-label"></span></div>';
            }
        }],
        order: [[1, 'asc']] // Disable ordering for the first column
    }));

    $('#example-select-all').on('click', function() {
        var rows = checkboxTable.rows({ search: 'applied' }).nodes();
        $('input[type="checkbox"]', rows).prop('checked', this.checked);
    });

    $('.checkbox-datatable tbody').on('change', 'input[type="checkbox"]', function() {
        if (!this.checked) {
            var el = $('#example-select-all').get(0);
            if (el && el.checked && ('indeterminate' in el)) {
                el.indeterminate = true;
            }
        }
    });
});
