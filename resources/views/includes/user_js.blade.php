<script>
    
    function updateSports(res){
        let html = ``;
        
        data = JSON.parse(res.data);
        $(data).each(function(){

            let date = (this.eventName).split(' / ')[1];
            date = date.split('M (')[0];
            dateHour = date[date.length-1];
            date = date.split(dateHour)[0];
            date += ' '+dateHour+'M';

            console.log('date---',date);
            
            
            this.eventName = new Date(date).toLocaleString();

            html += eval(res.sport)(this);
        });
        $('.sportData').html(html);
    }


    function cricket(data){
        return `
            <tr data-gameId='${data.gameId}' data-marketId='${data.marketId}'>
                <!-- Cricket -->
                <td class="text-start px-3">
                    <div class="match-layout">
                        <!-- Left Side: Date & Time -->
                        <span class="match-status today">${data.eventName}</small></span>

                        <!-- Right Side: Teams -->
                        <div class="right-side">
                            ${data.cname}
                        </div>
                    </div>
                </td>

                <td>
                    <a class="odd-btn">${data.back1}<br><small>${data.back1}</small></a>
                </td>

                <td>
                    <a class="odd-btn">${data.back1}<br><small>${data.back1}</small></a>
                </td>

                <td>
                    <a class="odd-btn">${data.lay1}<br><small>${data.lay1}</small></a>
                </td>
            </tr>
        `;
    }
</script>