<script>
    
    function updateSports(data){
        data = JSON.parse(data.data);
        $(data).each(function(){
            html += eval(data.sport)(data);
        });
        $('.sportData').append(html);
    }

    let html = ``;

    function cricket(data){
        return `
            <tr data-gameId='${data.gameId}' data-marketId='${data.marketId}'>
                <!-- Cricket -->
                <td class="text-start px-3">
                    <div class="match-layout">
                        <!-- Left Side: Date & Time -->
                        <span class="match-status today">${(data.eventName).split(' / ')[1]}</small></span>

                        <!-- Right Side: Teams -->
                        <div class="right-side">
                            ${data.cname}
                        </div>
                    </div>
                </td>

                <td>
                    <a class="odd-btn">2.32<br><small>${data.back1}</small></a>
                </td>

                <td>
                    <a class="odd-btn">1.72<br><small>${data.back1}</small></a>
                </td>

                <td>
                    <a class="odd-btn">0<br><small>${data.lay1}</small></a>
                </td>
            </tr>
        `;
    }
</script>