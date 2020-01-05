<?php
function select_comment_enable(){
?>
    <div class="mo_openid_table_layout">
        <table>
            <tr>
                <td colspan="2">
                    <p>
                        <h3>Enable Social Comments</h3>
                        To enable Social Comments, please select Facebook Comments from <strong>Select Applications</strong>. Also select one or both of the options from <strong>Display Options</strong>.
                        <h3>Add Social Comments</h3>
                        You can add social comments in the following areas from <strong>Display Options</strong>. If you require a shortcode, please contact us from the Support form on the right.
                        <ol>
                            <li>Blog Post: This option enables Social Comments on Posts / Blog Post.</li>
                            <li>Static pages: This option places Social Comments on Pages / Static Pages with comments enabled.</li>
                        </ol>
                    </p>
                </td>
            </tr>
        </table>
    </div>
    <script>
        jQuery('#mo_openid_page_heading').text('Enable Social Comments ');
    </script>
<?php
    }