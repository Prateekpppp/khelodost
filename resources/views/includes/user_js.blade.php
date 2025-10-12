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
        let eventPage = "{{url('eventPage')}}";
        let c_time = (new Date()).getTime();
        if((new Date()).getTime() < (new Date(data.eventDate)).getTime()) {
            eventPage = "{{url('upcomingEventPage')}}";
        }
        return `
            <tr data-gameId='${data.gameId}' data-marketId='${data.marketId}'>
                <!-- Cricket -->
                <td class="text-start px-3">
                    <div class="match-layout">
                        <!-- Left Side: Date & Time -->
                        <span class="match-status today">${data.eventDate}</small></span>

                        <!-- Right Side: Teams -->
                        <a href="${eventPage}/${data.gameId}" class="right-side">
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
            console.log('data-----items---',this);
            
            if(this.mname == "MATCH_ODDS"){
                updateMatchOdds(this);
            } else if(this.mname == "Bookmaker"){
                updateBookmaker(this);
            } else if(this.mname == "fancy1"){
                updateLinemarket(this);
            } else if(this.mname == "Bookmaker"){
                updateBookmaker(this);
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

        $(section).each(function(i,j){
            
            $(m_div).find(`.match_nat${i}`).html(j.nat);
            
            $(j.odds).each(function(){
                let odd = $(m_div).find(`.m_row${i}`).find(`.${this.oname}`);
                if($(odd).html() != this.odds){
                    $(this).addClass('odd_change');
                    setTimeout(() => {
                        $(this).removeClass('odd_change');
                    }, 300);
                }
                $(odd).html(this.odds);
            });
        });


    }
    
    function updateBookmaker(data){

        let m_div = $('.bookmaker');
        let section = data.section;

        $(section).each(function(i,j){
            
            $(m_div).find(`.match_nat${i}`).html(j.nat);
            
            $(j.odds).each(function(){
                let odd = $(m_div).find(`.m_row${i}`).find(`.${this.oname}`);
                if($(odd).html() != this.odds){
                    $(this).addClass('odd_change');
                    setTimeout(() => {
                        $(this).removeClass('odd_change');
                    }, 300);
                }
                $(odd).html(this.odds);
            });
        });


    }

    function updateLinemarket(data){

        let m_div = $('.linemarket');
        let section = data.section;
        let html =``;

        if(section.length) {
            $(m_div).parents('table').show();
        }
        $(section).each(function(i,j){
            html += `
                <tr class="m_row">
                    <td class="text-start px-3">
                        <div class="match-layout">
                            <div class="right-side">
                                <div class="match_nat">${j.nat}</div>
                            </div>
                        </div>
                    </td>

                    <td>
                        <a class="odd-btn back1">${j.odds[0].odds}</a>
                    </td>
                    
                    <td>
                        <a class="odd-btn lay1">${j.odds[0].odds}</a>
                    </td>

                </tr>
            `;
            
        });
        $(m_div).html(html);

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