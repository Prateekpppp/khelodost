<script>
    
    function updateSports(res){
        let html = ``;
        
        data = JSON.parse(res.data);
        $(data).each(function(){

            let date = (this.eventName).split(' / ')[1];
            this.eventName = (this.eventName).split(' / ')[0];

            date = date.split('M (')[0];
            dateHour = date[date.length-1];
            date = date.split(dateHour)[0];
            date += ' '+dateHour+'M';
            
            this.eventDate = new Date(date).toLocaleString();

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
                        <span class="match-status today">${data.eventDate}</small></span>

                        <!-- Right Side: Teams -->
                        <a href="{{url('eventPage')}}/${data.gameId}" class="right-side">
                            ${data.eventName}
                        </a>
                    </div>
                </td>

                <td>
                    <a class="odd-btn">${data.back11}<br><small>${data.back11}</small></a>
                    <a class="odd-btn">${data.back1}<br><small>${data.back1}</small></a>
                </td>

                <td>
                    <a class="odd-btn">${data.back12}<br><small>${data.back12}</small></a>
                    <a class="!bg-pink-300 odd-btn">${data.lay11}<br><small>${data.lay11}</small></a>
                </td>

                <td>
                    <a class="!bg-pink-300 odd-btn">${data.lay1}<br><small>${data.lay1}</small></a>
                    <a class="!bg-pink-300 odd-btn">${data.lay12}<br><small>${data.lay12}</small></a>
                </td>
            </tr>
        `;
    }


    function inplay(res){

        console.log('res in eventPage',res.data);
        data = res.data;
        data = JSON.parse(data);
        console.log('data in eventPage',data);
        let html = ``;
        
        // $(data).each(function(){

        //     let date = (this.eventName).split(' / ')[1];
        //     this.eventName = (this.eventName).split(' / ')[0];

        //     date = date.split('M (')[0];
        //     dateHour = date[date.length-1];
        //     date = date.split(dateHour)[0];
        //     date += ' '+dateHour+'M';
            
        //     this.eventDate = new Date(date).toLocaleString();

        //     html += eventData(this);
        // });
        // $('.eventData').html(html);
    }

    function updateEvent(res){

        res = res.response;
        res = JSON.parse(res);
        data = res.data;
        
        
        $(data).each(function(){

            if(this.mname == "MATCH_ODDS"){
                updateMatchOdds(this);
            }
        //     let date = (this.eventName).split(' / ')[1];
        //     this.eventName = (this.eventName).split(' / ')[0];

        //     date = date.split('M (')[0];
        //     dateHour = date[date.length-1];
        //     date = date.split(dateHour)[0];
        //     date += ' '+dateHour+'M';
            
        //     this.eventDate = new Date(date).toLocaleString();

        //     html += eventData(this);
        });
        // $('.eventData').html(html);
    }

    function updateMatchOdds(data){

        let m_div = $('.match_odds');

        let section = data.section;

        $(m_div).find('.match_nat1').html(section[0].nat);
        $(m_div).find('.match_nat2').html(section[1].nat);
        $(m_div).find('.match_nat3').html(section[2].nat);

        $(section).each(function(i,j){
            
            $(m_div).find(`.match_nat${i}`).html(j.nat);
            
            $(j.odds).each(function(){
                $(m_div).find(`.m_row${i}`).find(`.${this.oname}`).html(this.odds);
            });
        });


    }

    function eventData(data){
        return `
            <tr data-gameId='${data.gameId}' data-marketId='${data.marketId}'>
                <!-- eventData -->
                <td class="text-start px-3">
                    <div class="match-layout">
                        <!-- Left Side: Date & Time -->
                        <span class="match-status today">${data.eventDate}</small></span>

                        <!-- Right Side: Teams -->
                        <div class="right-side">
                            ${data.eventName}
                        </div>
                    </div>
                </td>

                <td>
                    <a class="odd-btn">${data.back11}<br><small>${data.back11}</small></a>
                    <a class="odd-btn">${data.back1}<br><small>${data.back1}</small></a>
                </td>

                <td>
                    <a class="odd-btn">${data.back12}<br><small>${data.back12}</small></a>
                    <a class="!bg-pink-300 odd-btn">${data.lay11}<br><small>${data.lay11}</small></a>
                </td>

                <td>
                    <a class="!bg-pink-300 odd-btn">${data.lay1}<br><small>${data.lay1}</small></a>
                    <a class="!bg-pink-300 odd-btn">${data.lay12}<br><small>${data.lay12}</small></a>
                </td>
            </tr>
        `;
    }
</script>