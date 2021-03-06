<?php
	include '../functions.php';
	RenderSkeleton1();
?>

<div id="wrapper">

	<?php
		DisplayHeader();
		DisplayNav2();
	?>
	<br />
	<br />
		 
	<div id="body">		
	
		
		<div class="download">
			<a href="https://github.com/EliasCole3/BusinessDemos">Github Link</a>
		</div>
		
		<div class="image2">
			<img src="../files/Assembly.png" />
		</div>
			
		<div class="SpacerForCode">
		
			<?php
			echo "TITLE Program 					(main.asm)<br />"; 
			echo "<br />"; 
			echo ";Elias Cole<br />"; 
			echo ";CS271<br />"; 
			echo ";Program 4<br />"; 
			echo "<br />"; 
			echo ";This program:<br />"; 
			echo ";	* Generates an array of 10-200 numbers(user specified) in the range[100-999]<br />"; 
			echo ";	* Displays the array<br />"; 
			echo ";	* Sorts the array<br />"; 
			echo ";	* Displays the array again<br />"; 
			echo ";	* Finds and displays the median value of the array<br />"; 
			echo "<br />"; 
			echo "<br />"; 
			echo "INCLUDE Irvine32.inc<br />"; 
			echo "MAXSIZE = 200<br />"; 
			echo "HIBOUND = 999<br />"; 
			echo "LOWBOUND = 100<br />"; 
			echo "<br />"; 
			echo ".data<br />"; 
			echo "<br />"; 
			echo "numArray	DWORD	MAXSIZE DUP(?)<br />"; 
			echo "userInput	DWORD	?<br />"; 
			echo "<br />"; 
			echo "msgIntro BYTE \"Name: Elias Cole  Program 4\",0<br />"; 
			echo "msgOutro BYTE \"Fin.\",0<br />"; 
			echo "msgPrompt BYTE \"Please enter the number of numbers you would like put into an array [10-200]: \",0<br />"; 
			echo "msgLess10 BYTE \"Your number is less than 10\",0<br />"; 
			echo "msgMore200 BYTE \"Your number is more than 200\",0<br />"; 
			echo "msgMedian BYTE \"The Median is: \",0<br />"; 
			echo "<br />"; 
			echo "<br />"; 
			echo ".code<br />"; 
			echo "main PROC  <br />"; 
			echo "<br />"; 
			echo "call Intro<br />"; 
			echo "<br />"; 
			echo ";get number of numbers to generate(10 - 200)<br />"; 
			echo "push OFFSET userInput<br />"; 
			echo "call GetUserInput<br />"; 
			echo "<br />"; 
			echo ";Generate integers(100 - 999) and store them in the array<br />"; 
			echo "push OFFSET numArray<br />"; 
			echo "push userInput<br />"; 
			echo "call GenerateAndFill<br />"; 
			echo "<br />"; 
			echo ";Display contents of array<br />"; 
			echo "push OFFSET numArray<br />"; 
			echo "push userInput<br />"; 
			echo "call DisplayArray<br />"; 
			echo "<br />"; 
			echo ";Sort array<br />"; 
			echo "push OFFSET numArray<br />"; 
			echo "push userInput<br />"; 
			echo "call Sort<br />"; 
			echo "<br />"; 
			echo ";Display contents of array<br />"; 
			echo "push OFFSET numArray<br />"; 
			echo "push userInput<br />"; 
			echo "call DisplayArray<br />"; 
			echo "<br />"; 
			echo ";Calculate and display median<br />"; 
			echo "push OFFSET numArray<br />"; 
			echo "push userInput<br />"; 
			echo "call Median<br />"; 
			echo "<br />"; 
			echo "call Outro<br />"; 
			echo "<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp exit<br />"; 
			echo "main ENDP<br />"; 
			echo "<br />"; 
			echo "<br />"; 
			echo "GetUserInput PROC<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp push ebp<br />"; 
			echo "&#09;mov ebp, esp<br />"; 
			echo "&#09;<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp startVal:<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp mov edx,OFFSET msgPrompt  ;instructions for user<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp call WriteString<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp call ReadInt 	;get user input<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp cmp eax, 10  ;jump if less than 1<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp jl lessThan10<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp cmp eax, 200	;jump if more than 100<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp jg moreThan200<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp jmp finishVal	;if valid, jump to end<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp lessThan10: ;show error message, and repeat process<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp mov edx,OFFSET msgLess10<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp call WriteString<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp jmp startVal<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp moreThan200:  ;show error message and repeat process<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp mov edx,OFFSET msgMore200<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp call WriteString<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp jmp startVal<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 	<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp finishVal: ;prep for looping<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp mov	ebx,[ebp+8]		;address of userInput into ebx<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp mov	[ebx],eax		;user input value into userInput variable<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp pop ebp<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp ret 4<br />"; 
			echo "GetUserInput ENDP<br />"; 
			echo "<br />"; 
			echo "<br />"; 
			echo "GenerateAndFill PROC<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp push ebp ;stackframe<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ebp, esp<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ecx,[ebp+8] ;user input<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov edi,[ebp +12] ;address of array<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp loop1:<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp mov eax, HIBOUND ;getting random number<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp sub eax, LOWBOUND<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp inc eax<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp call RandomRange<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp add eax, LOWBOUND<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp mov [edi], eax ;put the new number in the array<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp add edi, 4<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp loop loop1<br />"; 
			echo "<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp pop ebp<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp ret 8<br />"; 
			echo "GenerateAndFill ENDP<br />"; 
			echo "<br />"; 
			echo "<br />"; 
			echo "Sort PROC<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp push ebp<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ebp, esp<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ecx, [ebp+8]<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov esi, [ebp+12]<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov edx,0<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp S0:<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov	eax, edx			<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov	edi, [esi+eax*4]	<br />"; 
			echo "<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov	ebx, edx			<br />"; 
			echo "S1:<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp inc	ebx<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp cmp	ebx, ecx			<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp jge	S2<br />"; 
			echo "<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp cmp	edi, [esi+ebx*4]<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp jge	S1				<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov	eax, ebx		<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov	edi, [esi+eax*4]<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp jmp	S1<br />"; 
			echo "S2:<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp push	[esi+eax*4]		<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov	ebx, [esi+edx*4]	<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov	[esi+eax*4], ebx	<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp pop	[esi+edx*4]<br />"; 
			echo "<br />"; 
			echo "<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp inc	edx				<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp cmp	edx, ecx			<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp jl	S0				<br />"; 
			echo "<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp pop	ebp				<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp ret	8<br />"; 
			echo "Sort ENDP<br />"; 
			echo "<br />"; 
			echo "<br />"; 
			echo "DisplayArray PROC<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp push ebp ;stackframe<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ebp, esp<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov edx,[ebp+8] ;number of numbers<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov esi,[ebp +12] ;address of array<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp dec edx<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp jump1: ;write out array values <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp mov eax, [esi+edx*4]<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp call WriteDec<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp dec edx<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp cmp edx,0<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp jge jump1<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp pop ebp<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp ret 8<br />"; 
			echo "DisplayArray ENDP<br />"; 
			echo "<br />"; 
			echo "<br />"; 
			echo "Median PROC<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp push ebp ;stackframe<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ebp, esp<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov edx,OFFSET msgMedian<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call WriteString<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov edx,[ebp+8] ;number of numbers<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov esi,[ebp +12] ;address of array<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov eax, edx<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ebx, 2<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp xor edx, edx<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp div ebx<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp cmp edx, 0<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp JE UserInputEven<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp UserInputOdd:<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ecx,[ebp+8] <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp dec ecx         <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov eax, ecx <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ebx, 2	 <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp xor edx, edx <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp div ebx         <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov eax, [esi+eax*4] ;Array[x]<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call WriteDec<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp jmp Finish<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp UserInputEven:<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov eax,[ebp+8]     ;Example: 14    <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ebx, 2	 <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp xor edx, edx <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp div ebx         ;14/2 = 7<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp dec eax<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ecx, [esi+eax*4] ;save Array[7]<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov eax,[ebp+8]        <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ebx, 2	 <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp xor edx, edx <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp div ebx <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp add ecx, [esi+eax*4] ;x = Array[7] + Array[8]<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov eax, ecx        <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov ebx, 2	 <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp xor edx, edx <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp div ebx ;x/2 = median<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call WriteDec<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov	al,'.'<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call WriteChar<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov eax, edx<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call WriteDec  ;writing out the remainder, getting .1 instead of .5<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp Finish:<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp pop ebp<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp ret 8<br />"; 
			echo "Median ENDP<br />"; 
			echo "<br />"; 
			echo "<br />"; 
			echo "Intro PROC<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call Clrscr<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov edx,OFFSET msgIntro<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call WriteString<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call Randomize<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp ret<br />"; 
			echo "Intro ENDP<br />"; 
			echo "<br />"; 
			echo "Outro PROC<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp mov edx,OFFSET msgOutro<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call WriteString<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp call crlf<br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp <br />"; 
			echo "&nbsp&nbsp&nbsp&nbsp ret<br />"; 
			echo "Outro ENDP<br />"; 
			echo "<br />"; 
			echo "END main<br />";
			?>
		</div>
		
	</div>
</div>


<?php
	RenderSkeleton2();
?>
