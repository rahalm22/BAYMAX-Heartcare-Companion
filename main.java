import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.IOException;
import java.io.PrintWriter;

public class main {
	
	static double[] CardiovascularDisease  = new double[9]; // 
	static double[] CongestiveHeartFailure = new double[10];
	static double[] CoronaryHeartDisease = new double[10];
	static double[] HardCoronaryHeartDisease = new double[7];
	static double[] IntermittentClaudication = new double[8];
	static double[] Stroke = new double[9];
    static double[] AtrialFibrillation = new double[10];
			
	static double[] patient_para = new double[24];
	static double[] risk_values = new double[7];

	public static void main(String[] args) throws IOException 
	{
		BufferedReader br = null;
		FileReader fr = null;

		try {

			//br = new BufferedReader(new FileReader(FILENAME));
			fr = new FileReader("C:\\wamp64\\www\\BAYMAX\\HypothesisParameters.txt");
			br = new BufferedReader(fr);

			String sCurrentLine;
			int i = 1;
			while ((sCurrentLine = br.readLine()) != null) {
				String[] para = sCurrentLine.split(" "); 
				if (i == 1) {
					for(int j = 0; j < 9; j++) {
						CardiovascularDisease[j] = Double.parseDouble(para[j]);
					}
				}
				if (i == 2) {
					for(int j = 0; j < 10; j++) {
						CongestiveHeartFailure[j] = Double.parseDouble(para[j]);
					}
				}
				if (i == 3) {
					for(int j = 0; j < 10; j++) {
						CoronaryHeartDisease[j] = Double.parseDouble(para[j]);
					}
				}
				if (i == 4) {
					for(int j = 0; j < 7; j++) {
						HardCoronaryHeartDisease[j] = Double.parseDouble(para[j]);
					}
				}
				if (i == 5) {
					for(int j = 0; j < 8; j++) {
						IntermittentClaudication[j] = Double.parseDouble(para[j]);
					}
				}
				if (i == 6) {
					for(int j = 0; j < 9; j++) {
						Stroke[j] = Double.parseDouble(para[j]);
					}
				}
				if (i == 7) {
					for(int j = 0; j < 10; j++) {
						AtrialFibrillation[j] = Double.parseDouble(para[j]);
					}
				}
				i++;
				
			}
		} catch (IOException e) { e.printStackTrace();}
		finally {
			try {
				if (br != null)
				br.close();
				if (fr != null)
				fr.close();
			} catch (IOException ex) {
				ex.printStackTrace();

			}


		}
		try {

			//br = new BufferedReader(new FileReader(FILENAME));
			fr = new FileReader("C:\\wamp64\\www\\BAYMAX\\patientPredictionDetails.txt");
			br = new BufferedReader(fr);

			String sCurrentLine;
			String[] para;
			
			while ((sCurrentLine = br.readLine()) != null) {
				para = sCurrentLine.split(" ");
				for(int i=0;i<24;i++) 
				{
					if(para[i].equals("Yes")) patient_para[i] = 1.0;
					else if(para[i].equals("No")) patient_para[i] = 0.0;
					else if(para[i].equals("M")) patient_para[i] = 1.0;
					else if(para[i].equals("F")) patient_para[i] = 0.0;
					else {patient_para[i] = Double.parseDouble(para[i]);}
					//System.out.println(patient_para[i]);
					
				}
				

				
			}
		} catch (IOException e) { e.printStackTrace();}
		finally {
			try {
				if (br != null)
				br.close();
				if (fr != null)
				fr.close();
			} catch (IOException ex) {
				ex.printStackTrace();

			}


		}
		
		double[] z = new double[7];
		z[0] = CardiovascularDisease[0]*1 + CardiovascularDisease[1]*patient_para[2] + CardiovascularDisease[2]*patient_para[0]+ CardiovascularDisease[3]*patient_para[1]+ CardiovascularDisease[4]*patient_para[11]+ CardiovascularDisease[5]*patient_para[13]+ CardiovascularDisease[6]*patient_para[4]+ CardiovascularDisease[7]*patient_para[6]+ CardiovascularDisease[8]*patient_para[9]; 
		z[1] = CongestiveHeartFailure[0]*1+ CongestiveHeartFailure[1]*patient_para[0]+ CongestiveHeartFailure[2]*patient_para[3]+ CongestiveHeartFailure[3]*patient_para[4]+ CongestiveHeartFailure[4]*patient_para[2]+ CongestiveHeartFailure[5]*patient_para[18]+ CongestiveHeartFailure[6]*patient_para[21]+ CongestiveHeartFailure[7]*patient_para[19]+ CongestiveHeartFailure[8]*patient_para[11]+CongestiveHeartFailure[9]*patient_para[17];
		z[2] = CoronaryHeartDisease[0]*1 + CoronaryHeartDisease[1]*patient_para[0]+ CoronaryHeartDisease[2]*patient_para[1]+ CoronaryHeartDisease[3]*patient_para[11]+ CoronaryHeartDisease[4]*patient_para[13]+ CoronaryHeartDisease[5]*patient_para[4]+ CoronaryHeartDisease[6]*patient_para[5]+ CoronaryHeartDisease[7]*patient_para[9]+ CoronaryHeartDisease[8]*patient_para[8]+ CoronaryHeartDisease[9]*patient_para[6];
		z[3] = HardCoronaryHeartDisease[0]*1 + HardCoronaryHeartDisease[1]*patient_para[0]+ HardCoronaryHeartDisease[2]*patient_para[6]+ HardCoronaryHeartDisease[3]*patient_para[9]+ HardCoronaryHeartDisease[4]*patient_para[4]+ HardCoronaryHeartDisease[5]*patient_para[16]+ HardCoronaryHeartDisease[6]*patient_para[13];
		z[4] = IntermittentClaudication[0]*1+ IntermittentClaudication[1]*patient_para[0]+ IntermittentClaudication[2]*patient_para[1]+ IntermittentClaudication[3]*patient_para[6]+ IntermittentClaudication[4]*patient_para[16]+ IntermittentClaudication[5]*patient_para[13]+ IntermittentClaudication[6]*patient_para[11]+ IntermittentClaudication[7]*patient_para[21];
		z[5] = Stroke[0]*1 + Stroke[1]*patient_para[0] + Stroke[2]*patient_para[4] + Stroke[3]*patient_para[11] + Stroke[4]*patient_para[13] + Stroke[5]*patient_para[22] + Stroke[6]*patient_para[23] + Stroke[7]*patient_para[18] + Stroke[8]*patient_para[16] ;
		z[6] = AtrialFibrillation[0]*1 + AtrialFibrillation[1]*patient_para[2] + AtrialFibrillation[2]*patient_para[0] + AtrialFibrillation[3]*patient_para[1] + AtrialFibrillation[4]*patient_para[4] + AtrialFibrillation[5]*patient_para[16] + AtrialFibrillation[6]*patient_para[20] + AtrialFibrillation[7]*patient_para[15] + AtrialFibrillation[8]*patient_para[11] + AtrialFibrillation[9]*patient_para[18] ;
		
		for(int i=0;i<7;i++) 
		{
			risk_values[i] = (1 / ( 1 + Math.exp(-z[i])  ))*100;
		}
		
		//Getting the output stream of the file for writing
		File f = new File("C:\\wamp64\\www\\BAYMAX\\PredictedResults.txt");
		FileOutputStream fos = new FileOutputStream(f);
		PrintWriter pw = new PrintWriter(fos);


		//Writing the user input to the file
		//pw.write(c.OutputString); pw.write("\n");
		for(int i=0;i<7;i++) 
		{
			pw.write(""+risk_values[i]); pw.write("\n");
			System.out.println(risk_values[i]);
		}
		
		pw.flush();
		fos.close();
		pw.close();
	}

}
