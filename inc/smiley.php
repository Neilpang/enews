<script type="text/javascript" language="javascript">
/* <![CDATA[ */
    function grin(tag) {
    	var myField;
    	tag = ' ' + tag + ' ';
        if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
    		myField = document.getElementById('comment');
    	} else {
    		return false;
    	}
    	if (document.selection) {
    		myField.focus();
    		sel = document.selection.createRange();
    		sel.text = tag;
    		myField.focus();
    	}
    	else if (myField.selectionStart || myField.selectionStart == '0') {
    		var startPos = myField.selectionStart;
    		var endPos = myField.selectionEnd;
    		var cursorPos = endPos;
    		myField.value = myField.value.substring(0, startPos)
    					  + tag
    					  + myField.value.substring(endPos, myField.value.length);
    		cursorPos += tag.length;
    		myField.focus();
    		myField.selectionStart = cursorPos;
    		myField.selectionEnd = cursorPos;
    	}
    	else {
    		myField.value += tag;
    		myField.focus();
    	}
    }
/* ]]> */
</script>

<a title="mrgreen" href="javascript:grin(' :mrgreen: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_mrgreen.gif"></a><a title="razz" href="javascript:grin(' :razz: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_razz.gif"></a><a title="sad" href="javascript:grin(' :sad: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_sad.gif"></a><a title="smile" href="javascript:grin(' :smile: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_smile.gif"></a><a title="oops" href="javascript:grin(' :oops: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_redface.gif"></a><a title="grin" href="javascript:grin(' :grin: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_biggrin.gif"></a><a title="eek" href="javascript:grin(' :eek: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_surprised.gif"></a><a title="???" href="javascript:grin(' :???: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_confused.gif"></a><a title="cool" href="javascript:grin(' :cool: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_cool.gif"></a><a title="lol" href="javascript:grin(' :lol: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_lol.gif"></a><a title="mad" href="javascript:grin(' :mad: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_mad.gif"></a><a title="twisted" href="javascript:grin(' :twisted: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_twisted.gif"></a><a title="roll" href="javascript:grin(' :roll: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_rolleyes.gif"></a><a title="wink" href="javascript:grin(' :wink: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_wink.gif"></a><a title="idea" href="javascript:grin(' :idea: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_idea.gif"></a><a title="arrow" href="javascript:grin(' :arrow: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_arrow.gif"></a><a title="neutral" href="javascript:grin(' :neutral: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_neutral.gif"></a><a title="cry" href="javascript:grin(' :cry: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_cry.gif"></a><a title="?" href="javascript:grin(' :?: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_question.gif"></a><a title="evil" href="javascript:grin(' :evil: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_evil.gif"></a><a title="shock" href="javascript:grin(' :shock: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_eek.gif"></a><a title="!" href="javascript:grin(' :!: ')"><img src="http://8.cn/wp-content/themes/greencatch/images/smilies/icon_exclaim.gif"></a>
