<style>
    /* General styles */
    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: auto;
    }

    #img-product {
        width: 50px;
        height: 50px;
    }

    th, td {
        white-space: nowrap;
        padding: 8px;
        text-align: left;
    }

    /* Responsive adjustments for small screens */
    @media (max-width: 680px) {
        .table-responsive {
            overflow-x: auto;
            display: block;
        }

        table {
            width: 100%;
            display: table;
        }

        thead {
            display: table-header-group;
        }

        tbody {
            display: table-row-group;
            width: 100%;
        }

        tr {
            display: table-row;
            margin-bottom: 0;
            border-bottom: none;
            padding: 0;
        }

        td {
            display: table-cell;
            justify-content: normal;
            padding: 5px;
            font-size: 14px;
        }

        th:nth-child(5), th:nth-child(6) {
            display: none;
        }

        td::before {
            content: none;
        }

        .btn-added {
            display: block;
            text-align: center;
            width: 100%;
        }

        #font {
            font-size: 8px;
        }

        /* Hide Price and Quantity columns on small screens */
        td:nth-child(5), td:nth-child(6) {
            display: none;
        }

        td {
            font-size: 7px;
        }

        #img-product {
        width: 20px;
        height: 20px;
    }

        #hight {
            width: 10px;
            height: 10px;
        }

        select {
            cursor: pointer;
            appearance: none;
        }

        /* Dropdown effect for delete button */
        .delete-product {
            position: relative;
            display: inline-block;
        }
    }
</style>