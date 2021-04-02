$(document).ready(function(){
    // Zero configuration Data Table
    let dataTable = $("#basicDataTable");
    if(dataTable){
        dataTable.DataTable();
    }

    // Feature enable / disable Data Table
    let dataTable2 = $("#dataTable2")
    $(dataTable2).DataTable({
        paging : false,
        ordering : false,
        info : false,
        "language": {
            "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
            "zeroRecords": "Maaf, tiada rekod.",
            "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada rekod yang tersedia",
            "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
            "search": "Carian",
            "previous": "Sebelum",
            "paginate": {
                "first":      "Pertama",
                "last":       "Terakhir",
                "next":       "Seterusnya",
                "previous":   "Sebelumnya"
            },
        },
    });

    // Default ordering (sorting) Data Table
    let defaultOrderingTable = $("#defaultOrderingDataTable")
    $(defaultOrderingTable).DataTable({
        "order": [[ 4, "desc" ]],
        "language": {
            "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
            "zeroRecords": "Maaf, tiada rekod.",
            "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada rekod yang tersedia",
            "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
            "search": "Carian",
            "previous": "Sebelum",
            "paginate": {
                "first":      "Pertama",
                "last":       "Terakhir",
                "next":       "Seterusnya",
                "previous":   "Sebelumnya"
            },
        },
    });

    // Multi-column ordering Data Table
    let defaultMulOrderingDataTable = $("#defaultMulOrderingDataTable")
    $(defaultMulOrderingDataTable).DataTable({
        columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 4 ],
            orderData: [ 4, 0 ]
        } ],
        "language": {
            "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
            "zeroRecords": "Maaf, tiada rekod.",
            "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada rekod yang tersedia",
            "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
            "search": "Carian",
            "previous": "Sebelum",
            "paginate": {
                "first":      "Pertama",
                "last":       "Terakhir",
                "next":       "Seterusnya",
                "previous":   "Sebelumnya"
            },
        },
    });

    // Hidden columns Data Table
    let hidenDataTable = $("#hidenDataTable")
    $(hidenDataTable).DataTable({
        responsive : true,
        "language": {
            "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
            "zeroRecords": "Maaf, tiada rekod.",
            "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada rekod yang tersedia",
            "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
            "search": "Carian",
            "previous": "Sebelum",
            "paginate": {
                "first":      "Pertama",
                "last":       "Terakhir",
                "next":       "Seterusnya",
                "previous":   "Sebelumnya"
            },
        },
        "columnDefs": [
            {
                "targets": [ 3 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 4 ],
                "visible": false
            }
        ]
    });

    // Complex headers (rowspan and colspan) Data Table
    let complexDataTable = $("#complexDataTable");
    $(complexDataTable).DataTable();

    // DOM positioning Data Table
    let domPositioningDataTable = $("#domPositioningDataTable");
    $(domPositioningDataTable).DataTable({
        dom : '<"top"i>rt<"bottom"flp><"clear">'
    });

    // Alternative pagination Data Table
    let alternativePaginationDataTable = $("#alternativePaginationDataTable");
    $(alternativePaginationDataTable).DataTable({
        pagingType : "full_numbers"
    });

    // Scroll - vertical Data Table
    let scrollVerticalDataTable = $("#scrollVerticalDataTable");
    $(scrollVerticalDataTable).DataTable({
        scrollY : '200px',
        scrollCollapse : true,
        paging : false
    });

    // Scroll - vertical, dynamic height Data Table
    let dynamicScrollVerticalDataTable = $("#dynamicScrollVerticalDataTable");
    $(dynamicScrollVerticalDataTable).DataTable({
        scrollY : '50vh',
        scrollCollapse : true,
        paging : false
    });

    // Scroll - horizontal Data Table
    let scrollHorizontalDataTable = $("#scrollHorizontalDataTable");
    $(scrollHorizontalDataTable).DataTable({
        "scrollX": true
    });

    // Scroll - horizontal Data Table
    let scrollVerticalHorizontalDataTable = $("#scrollVerticalHorizontalDataTable");
    $(scrollVerticalHorizontalDataTable).DataTable({
        scrollY : '200px',
        "scrollX": true
    });

    // Language - Comma decimal place Data Table
    let languageComaDecimalDataTable = $("#languageComaDecimalDataTable");
    $(languageComaDecimalDataTable).DataTable({
        "language": {
            "decimal": ",",
            "thousands": "."
        }
    });

    // Language options Data Table
    let languageDataTable = $("#languageDataTable");
    $(languageDataTable).DataTable({
        "language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "Tiada data",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    });

    // Responsive Data Table
    let tableHarga = $("#tableHarga")
    $(tableHarga).DataTable({
        responsive : true,
        "language": {
            "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
            "zeroRecords": "Maaf, tiada rekod.",
            "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada rekod yang tersedia",
            "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
            "search": "Carian",
            "previous": "Sebelum",
            "paginate": {
                "first":      "Pertama",
                "last":       "Terakhir",
                "next":       "Seterusnya",
                "previous":   "Sebelumnya"
            },
        },
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],
    });

    // Responsive Data Table
    let responsiveDataTable = $("#responsiveDataTable")
    $(responsiveDataTable).DataTable({
        responsive : true,
        "language": {
            "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
            "zeroRecords": "Maaf, tiada rekod.",
            "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada rekod yang tersedia",
            "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
            "search": "Carian",
            "previous": "Sebelum",
            "paginate": {
                "first":      "Pertama",
                "last":       "Terakhir",
                "next":       "Seterusnya",
                "previous":   "Sebelumnya"
            },
        },
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],
    });

    // Responsive Data Table
    let responsiveDataTable2 = $("#responsiveDataTable2")
    $(responsiveDataTable2).DataTable({
        responsive : true,
        "language": {
            "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
            "zeroRecords": "Maaf, tiada rekod.",
            "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada rekod yang tersedia",
            "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
            "search": "Carian",
            "previous": "Sebelum",
            "paginate": {
                "first":      "Pertama",
                "last":       "Terakhir",
                "next":       "Seterusnya",
                "previous":   "Sebelumnya"
            },
        },
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],
    });

    // Responsive Data Table

    let responsiveDataTable3 = $("#responsiveDataTable3")
    $(responsiveDataTable3).DataTable({
        responsive : true,
        "language": {
            "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
            "zeroRecords": "Maaf, tiada rekod.",
            "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada rekod yang tersedia",
            "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
            "search": "Carian",
            "previous": "Sebelum",
            "paginate": {
                "first":      "Pertama",
                "last":       "Terakhir",
                "next":       "Seterusnya",
                "previous":   "Sebelumnya"
            },
        },
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],
    });

    // Responsive Data Table
    let responsiveAuditTable = $("#responsiveAuditTable")
    $(responsiveAuditTable).DataTable({
        responsive : true,
        scrollX: true,
        order: [[ 3, "desc" ]],
        "language": {
            "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
            "zeroRecords": "Maaf, tiada rekod.",
            "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada rekod yang tersedia",
            "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
            "search": "Carian",
            "previous": "Sebelum",
            "paginate": {
                "first":      "Pertama",
                "last":       "Terakhir",
                "next":       "Seterusnya",
                "previous":   "Sebelumnya"
            },
        },
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],
    });

    // Responsive Data Table
    let responsiveSuratTable = $("#responsiveSuratTable")
    $(responsiveSuratTable).DataTable({
      "language": {
          "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
          "zeroRecords": "Maaf, tiada rekod.",
          "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
          "infoEmpty": "Tidak ada rekod yang tersedia",
          "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
          "search": "Carian",
          "previous": "Sebelum",
          "paginate": {
              "first":      "Pertama",
              "last":       "Terakhir",
              "next":       "Seterusnya",
              "previous":   "Sebelumnya"
          },
      },
        responsive : true,
        scrollX: true,
        order: [[ 0, "desc" ]],
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],
    });

    // Responsive Data Table
    let list_permohonan_user = $("#list_permohonan_user")
    $(list_permohonan_user).DataTable({
      "language": {
          "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
          "zeroRecords": "Maaf, tiada rekod.",
          "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
          "infoEmpty": "Tidak ada rekod yang tersedia",
          "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
          "search": "Carian",
          "previous": "Sebelum",
          "paginate": {
              "first":      "Pertama",
              "last":       "Terakhir",
              "next":       "Seterusnya",
              "previous":   "Sebelumnya"
          },
      },
        responsive : true,
        order:[[1,"desc"]],
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],

    });

    // Responsive Data Table
    let list_permohonan_user_eng = $("#list_permohonan_user_eng")
    $(list_permohonan_user_eng).DataTable({
        responsive : true,
        order:[[1,"desc"]],
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],

    });

    // Responsive Data Table
    let list_permohonan_user_lulus = $("#list_permohonan_user_lulus")
    $(list_permohonan_user_lulus).DataTable({
      "language": {
          "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
          "zeroRecords": "Maaf, tiada rekod.",
          "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
          "infoEmpty": "Tidak ada rekod yang tersedia",
          "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
          "search": "Carian",
          "previous": "Sebelum",
          "paginate": {
              "first":      "Pertama",
              "last":       "Terakhir",
              "next":       "Seterusnya",
              "previous":   "Sebelumnya"
          },
      },
        responsive : true,
        order:[[4,"desc"]],
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],

    });

    // Responsive Data Table
    let list_permohonan_user_lulus_eng = $("#list_permohonan_user_lulus_eng")
    $(list_permohonan_user_lulus_eng).DataTable({
        responsive : true,
        order:[[4,"desc"]],
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],

    });

    // Responsive Data Table
    let list_permohonan_user_gagal = $("#list_permohonan_user_gagal")
    $(list_permohonan_user_gagal).DataTable({
      "language": {
          "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
          "zeroRecords": "Maaf, tiada rekod.",
          "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
          "infoEmpty": "Tidak ada rekod yang tersedia",
          "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
          "search": "Carian",
          "previous": "Sebelum",
          "paginate": {
              "first":      "Pertama",
              "last":       "Terakhir",
              "next":       "Seterusnya",
              "previous":   "Sebelumnya"
          },
      },
        responsive : true,
        order:[[2,"desc"]],
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],

    });

    // Responsive Data Table
    let list_permohonan_user_gagal_eng = $("#list_permohonan_user_gagal_eng")
    $(list_permohonan_user_gagal_eng).DataTable({
      "language": {
          "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
          "zeroRecords": "Maaf, tiada rekod.",
          "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
          "infoEmpty": "Tidak ada rekod yang tersedia",
          "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
          "search": "Carian",
          "previous": "Sebelum",
          "paginate": {
              "first":      "Pertama",
              "last":       "Terakhir",
              "next":       "Seterusnya",
              "previous":   "Sebelumnya"
          },
      },
        responsive : true,
        order:[[2,"desc"]],
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],

    });

    // Responsive Data Table
    let list_permohonan_baru = $("#list_permohonan_baru")
    $(list_permohonan_baru).DataTable({
      "language": {
          "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
          "zeroRecords": "Maaf, tiada rekod.",
          "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
          "infoEmpty": "Tidak ada rekod yang tersedia",
          "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
          "search": "Carian",
          "previous": "Sebelum",
          "paginate": {
              "first":      "Pertama",
              "last":       "Terakhir",
              "next":       "Seterusnya",
              "previous":   "Sebelumnya"
          },
      },
      responsive : true,
      columnDefs: [
       {
           "targets": [1,2], // your case first column
           "className": "text-center",
           "width": "30%"
      },
      {
           "targets": 0,
           "className": "text-center",
      }],
    });

    // Responsive Data Table
    let list_permohonan_baru_2 = $("#list_permohonan_baru_2")
    $(list_permohonan_baru_2).DataTable({
      "language": {
          "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
          "zeroRecords": "Maaf, tiada rekod.",
          "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
          "infoEmpty": "Tidak ada rekod yang tersedia",
          "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
          "search": "Carian",
          "previous": "Sebelum",
          "paginate": {
              "first":      "Pertama",
              "last":       "Terakhir",
              "next":       "Seterusnya",
              "previous":   "Sebelumnya"
          },
      },
        responsive : true,
        columnDefs: [
                      {
                           "targets": "_all", // your case first column
                           "className": "text-center",
                      },
                    ],
    });

    // Responsive Data Table
    let list_permohonan_gagal = $("#list_permohonan_gagal")
    $(list_permohonan_gagal).DataTable({
      "language": {
          "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
          "zeroRecords": "Maaf, tiada rekod.",
          "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
          "infoEmpty": "Tidak ada rekod yang tersedia",
          "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
          "search": "ID Pemohon / Nama",
          "previous": "Sebelum",
          "paginate": {
              "first":      "Pertama",
              "last":       "Terakhir",
              "next":       "Seterusnya",
              "previous":   "Sebelumnya"
          },
      },
        responsive : true,
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],
    });



    // Responsive Data Table
    let list_permohonan_lulus = $("#list_permohonan_lulus")
    $(list_permohonan_lulus).DataTable({
      "language": {
          "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
          "zeroRecords": "Maaf, tiada rekod.",
          "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
          "infoEmpty": "Tidak ada rekod yang tersedia",
          "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
          "search": "Carian",
          "previous": "Sebelum",
          "paginate": {
              "first":      "Pertama",
              "last":       "Terakhir",
              "next":       "Seterusnya",
              "previous":   "Sebelumnya"
          },
      },
        responsive : true,
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],
    });

    //test

    let list_permohonan_dalaman = $("#list_permohonan_dalaman")
    $(list_permohonan_dalaman).DataTable({
      "language": {
          "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
          "zeroRecords": "Maaf, tiada rekod.",
          "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
          "infoEmpty": "Tidak ada rekod yang tersedia",
          "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
          "search": "Carian",
          "previous": "Sebelum",
          "paginate": {
              "first":      "Pertama",
              "last":       "Terakhir",
              "next":       "Seterusnya",
              "previous":   "Sebelumnya"
          },
      },
        responsive : true,
        columnDefs: [
                     {
                          "targets": "_all", // your case first column
                          "className": "text-center",
                     },
                   ],
    });


    // Individual column searching  Data Table

    // Setup - add a text input to each footer cell
    let columnSearchDataTable = $("#columnSearchDataTable");
    $('#columnSearchDataTable thead th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
    } );

    // DataTable
    var table = $(columnSearchDataTable).DataTable({
        ordering : false
    });

    // Apply the search
    table.columns().every( function () {
        var that = this;

        $( 'input', this.header() ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
})
